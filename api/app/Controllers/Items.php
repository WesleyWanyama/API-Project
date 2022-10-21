<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ItemsModel;

class Items extends BaseController
{
    public function __construct(){
        helper(['url','form']);
    }

    public function main()
    {
        $crudModel = new ItemsModel();

        $data['user_data'] = $crudModel->orderBy('product_id', 'ASC')->paginate(20);

        $data['pagination_link'] = $crudModel->pager;

        return view('auth/admin_items.php', $data);
    }
    public function add(){
        return view('auth/add_items.php');
    }
    public function processAddItem(){
        $validation = $this->validate([
            'product_name'=>'required',
            'product_description'=>'required',
            'product_image'=>'required',
            'product_price'=>'required',
            'available_quantity'=>'required',
            'subcategory_id'=>'required',
            'created_at'=>'required',
            'updated_at'=>'required',
            'added_by'=>'required'

        ]);
        
        if(!$validation){
            return view('auth/add_items',['validation'=>$this->validator]);

        }
        else{
            //stores in db
            $product_name =$this->request->getPost('product_name');
            $product_description =$this->request->getPost('product_description');
            $product_image=$this->request->getPost('product_image');
            $product_price=$this->request->getPost('product_price');
            $available_quantity =$this->request->getPost('available_quantity');
            $subcategory_id =$this->request->getPost('subcategory_id');
            $created_at=$this->request->getPost('created_at');
            $updated_at=$this->request->getPost('updated_at');
            $added_by =$this->request->getPost('added_by');

            $values=[

              'product_name'=>$product_name,
              'product_description'=>$product_description,
              'product_image'=>$product_image,
              'product_price'=>$product_price,
              'available_quantity'=>$available_quantity,
              'created_at'=>$created_at,
              'updated_at'=>$updated_at,
              'added_by'=>$added_by,

            ];

            $categorymodel= new ItemsModel();
            $query =$categorymodel->insert($values);
            if(!$query){
            return redirect()->back()->with('fail','something is wrong');
            }else{
            return redirect()->to('Items/main')->with('sucess','Item added successfuly');
            }


        }

    }

    public function fetch_single_data($product_id = null){
        $crudModel = new ItemsModel();

        $data['user_data'] = $crudModel->where('product_id', $product_id)->first();

        return view('auth/edit_item.php', $data);

    }

    public function editItem(){
        helper(['form', 'url']);
        
        $error = $this->validate([
            'product_name'=>'required',
            'product_description'=>'required',
            'product_image'=>'required',
            'product_price'=>'required',
            'available_quantity'=>'required',
            'created_at'=>'required',
            'updated_at'=>'required',
            'added_by'=>'required'
        ]);

        $crudModel = new ItemsModel();

        $product_id = $this->request->getVar('product_id');

        if(!$error)
        {
            $data['user_data'] = $crudModel->where('product_id', $product_id)->first();
            $data['error'] = $this->validator;
            echo view('auth/edit_item.php', $data);
        } 
        else 
        {
            $data = [
                'product_name' => $this->request->getVar('product_name'),
                'product_description' => $this->request->getVar('product_description'),
                'product_image' => $this->request->getVar('product_image'),
                'product_price' => $this->request->getVar('product_price'),
                'available_quantity' => $this->request->getVar('available_quantity'),
                'created_at' => $this->request->getVar('created_at'),
                'updated_at' => $this->request->getVar('updated_at'),
                'added_by' => $this->request->getVar('added_by'),
            ];

            $crudModel->update($product_id, $data);

            $session = \Config\Services::session();

            $session->setFlashdata('success', 'User Updated');

            return $this->response->redirect(site_url('/Items/main'));
        }
    }
    function delete($product_id)
    {
        $crudModel = new ItemsModel();

        $crudModel->where('product_id', $product_id)->delete($product_id);

        $session = \Config\Services::session();

        $session->setFlashdata('success', 'User Deleted');

        return $this->response->redirect(site_url('/Items/main'));
    }
}
