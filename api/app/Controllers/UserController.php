<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\libraries\Hash;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function __construct(){
        helper(['url','form']);
    }

    public function main()
    {
        $crudModel = new UserModel();

        $data['user_data'] = $crudModel->orderBy('user_id', 'ASC')->paginate(20);

        $data['pagination_link'] = $crudModel->pager;

        return view('auth/admin_users.php', $data);
    }
    public function add(){
        return view('auth/add_users.php');
    }
    public function processAddUser(){
        $validation = $this->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|valid_email|is_unique[users.email]',
            'password'=>'required|min_length[5]|max_length[12]',
            'gender'=>'required',
            'role'=>'required'

        ]);
        
        if(!$validation){
            return view('UserController/add',['validation'=>$this->validator]);

        }
        else{
            //stores in db
            $first_name =$this->request->getPost('first_name');
            $last_name =$this->request->getPost('last_name');
            $email=$this->request->getPost('email');
            $password=$this->request->getPost('password');
            $gender =$this->request->getPost('gender');
            $role =$this->request->getPost('role');

            $values=[

              'first_name'=>$first_name,
              'last_name'=>$last_name,
              'email'=>$email,
              'password'=>Hash::make($password),
              'gender'=>$gender,
              'role'=>$role,

            ];

            $categorymodel= new UserModel();
            $query =$categorymodel->insert($values);
            if(!$query){
            return redirect()->back()->with('fail','something is wrong');
            }else{
            return redirect()->to('UserController/main')->with('sucess','User added successfuly');
            }


        }

    }

    public function fetch_single_data($user_id = null){
        $crudModel = new UserModel();

        $data['user_data'] = $crudModel->where('user_id', $user_id)->first();

        return view('auth/edit_user.php', $data);

    }

    public function editUser(){
        helper(['form', 'url']);
        
        $error = $this->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|valid_email|is_unique[users.email]',
            'password'=>'required|min_length[5]|max_length[12]',
            'gender'=>'required',
            'role'=>'required'
        ]);

        $crudModel = new UserModel();

        $user_id = $this->request->getVar('user_id');

        if(!$error)
        {
            $data['user_data'] = $crudModel->where('user_id', $user_id)->first();
            $data['error'] = $this->validator;
            echo view('auth/edit_user.php', $data);
        } 
        else 
        {
            $data = [
                'first_name' => $this->request->getVar('first_name'),
                'last_name' => $this->request->getVar('last_name'),
                'email' => $this->request->getVar('email'),
                'password' => $this->request->getVar('password'),
                'gender' => $this->request->getVar('gender'),
                'role' => $this->request->getVar('role'),
            ];

            $crudModel->update($user_id, $data);

            $session = \Config\Services::session();

            $session->setFlashdata('success', 'User Updated');

            return $this->response->redirect(site_url('/UserController/main'));
        }
    }
    function delete($user_id)
    {
        $crudModel = new UserModel();

        $crudModel->where('user_id', $user_id)->delete($user_id);

        $session = \Config\Services::session();

        $session->setFlashdata('success', 'User Deleted');

        return $this->response->redirect(site_url('/UserController/main'));
    }
}
