<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\SubcategoryModel;

class Subcategory extends BaseController
{
    public function __construct(){
        helper(['url','form']);
    }

    public function main()
    {
        $crudModel = new SubcategoryModel();

        $data['user_data'] = $crudModel->orderBy('subcategory_id', 'ASC')->paginate(20);

        $data['pagination_link'] = $crudModel->pager;

        return view('auth/admin_subcategories.php', $data);
    }
    public function add(){
        return view('auth/add_subcategory.php');
    }
    public function processAddSubcategory(){
        $validation = $this->validate([
            'subcategory_name'=>'required'

        ]);
        
        if(!$validation){
            return view('Subcategory/add',['validation'=>$this->validator]);

        }
        else{
            //stores in db
            $subcategory_name =$this->request->getPost('subcategory_name');

            $values=[

              'subcategory_name'=>$subcategory_name,

            ];

            $categorymodel= new SubcategoryModel();
            $query =$categorymodel->insert($values);
            if(!$query){
            return redirect()->back()->with('fail','something is wrong');
            }else{
            return redirect()->to('Subcategory/main')->with('sucess','Subcategory added successfuly');
            }


        }

    }

    public function fetch_single_data($subcategory_id = null){
        $crudModel = new SubcategoryModel();

        $data['user_data'] = $crudModel->where('subcategory_id', $subcategory_id)->first();

        return view('auth/edit_subcategory.php', $data);

    }

    public function editSubcategory(){
        helper(['form', 'url']);
        
        $error = $this->validate([
            'subcategory_name'  => 'required|min_length[3]'
        ]);

        $crudModel = new SubcategoryModel();

        $subcategory_id = $this->request->getVar('subcategory_id');

        if(!$error)
        {
            $data['user_data'] = $crudModel->where('subcategory_id', $subcategory_id)->first();
            $data['error'] = $this->validator;
            echo view('auth/edit_subcategory.php', $data);
        } 
        else 
        {
            $data = [
                'subcategory_name' => $this->request->getVar('subcategory_name'),
            ];

            $crudModel->update($subcategory_id, $data);

            $session = \Config\Services::session();

            $session->setFlashdata('success', 'Subcategory Updated');

            return $this->response->redirect(site_url('/Subcategory/main'));
        }
    }
    function delete($subcategory_id)
    {
        $crudModel = new SubcategoryModel();

        $crudModel->where('subcategory_id', $subcategory_id)->delete($subcategory_id);

        $session = \Config\Services::session();

        $session->setFlashdata('success', 'Subcategory Deleted');

        return $this->response->redirect(site_url('/Subcategory/main'));
    }
}
