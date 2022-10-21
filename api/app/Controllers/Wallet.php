<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\WalletModel;

class Wallet extends BaseController
{
    public function __construct(){
        helper(['url','form']);
    }

    public function main()
    {
        $crudModel = new WalletModel();

        $data['user_data'] = $crudModel->orderBy('wallet_id', 'ASC')->paginate(20);

        $data['pagination_link'] = $crudModel->pager;

        return view('auth/wallet_view.php', $data);
    }
    public function add(){
        return view('auth/add_money.php');
    }
    public function processAddMoney(){
        $validation = $this->validate([
            'customer_id'=>'required',
            'amount_available'=>'required',
            'created_at'=>'required',
            'updated_at'=>'required'

        ]);
        
        if(!$validation){
            return view('Wallet/add',['validation'=>$this->validator]);

        }
        else{
            //stores in db
            $customer_id =$this->request->getPost('customer_id');
            $amount_available =$this->request->getPost('amount_available');
            $created_at=$this->request->getPost('created_at');
            $updated_at=$this->request->getPost('updated_at');

            $values=[

              'customer_id'=>$customer_id,
              'amount_available'=>$amount_available,
              'created_at'=>$created_at,
              'updated_at'=>$updated_at,

            ];

            $categorymodel= new WalletModel();
            $query =$categorymodel->insert($values);
            if(!$query){
            return redirect()->back()->with('fail','something is wrong');
            }else{
            return redirect()->to('Wallet/main')->with('sucess','Money added successfuly');
            }


        }

    }
}
