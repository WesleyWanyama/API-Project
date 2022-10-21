<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CategoryModel;

class Category extends BaseController
{
    public function __construct(){
        helper(['url','form']);
    }

    public function main()
    {
        $crudModel = new CategoryModel();

        $data['user_data'] = $crudModel->orderBy('category_id', 'ASC')->paginate(20);

        $data['pagination_link'] = $crudModel->pager;

        return view('auth/admin_categories.php', $data);
    }
    public function add(){
        return view('auth/add_category.php');
    }
    public function processAddCategory(){
        $validation = $this->validate([
            'category_name'=>'required'

        ]);
        
        if(!$validation){
            return view('Category/add',['validation'=>$this->validator]);

        }
        else{
            //stores in db
            $category_name =$this->request->getPost('category_name');

            $values=[

              'category_name'=>$category_name,

            ];

            $categorymodel= new CategoryModel();
            $query =$categorymodel->insert($values);
            if(!$query){
            return redirect()->back()->with('fail','something is wrong');
            }else{
            return redirect()->to('Category/main')->with('sucess','Category added successfuly');
            }


        }

    }

    public function fetch_single_data($category_id = null){
        $crudModel = new CategoryModel();

        $data['user_data'] = $crudModel->where('category_id', $category_id)->first();

        return view('auth/edit_category.php', $data);

    }

    public function editCategory(){
        helper(['form', 'url']);
        
        $error = $this->validate([
            'category_name'  => 'required|min_length[3]'
        ]);

        $crudModel = new CategoryModel();

        $category_id = $this->request->getVar('category_id');

        if(!$error)
        {
            $data['user_data'] = $crudModel->where('category_id', $category_id)->first();
            $data['error'] = $this->validator;
            echo view('auth/edit_category.php', $data);
        } 
        else 
        {
            $data = [
                'category_name' => $this->request->getVar('category_name'),
            ];

            $crudModel->update($category_id, $data);

            $session = \Config\Services::session();

            $session->setFlashdata('success', 'Category Updated');

            return $this->response->redirect(site_url('/Category/main'));
        }
    }
    function delete($category_id)
    {
        $crudModel = new CategoryModel();

        $crudModel->where('category_id', $category_id)->delete($category_id);

        $session = \Config\Services::session();

        $session->setFlashdata('success', 'Category Deleted');

        return $this->response->redirect(site_url('/Category/main'));
    }
}
