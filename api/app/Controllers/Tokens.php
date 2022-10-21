<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\TokensModel;

class Tokens extends BaseController
{
    public function __construct(){
        helper(['url','form']);
    }

    public function main()
    {
        $crudModel = new TokensModel();

        $data['user_data'] = $crudModel->orderBy('apitoken_id', 'ASC')->paginate(20);

        $data['pagination_link'] = $crudModel->pager;

        return view('auth/admin_tokens.php', $data);
    }
    public function accessToken(){
        $crudModel = new TokensModel();

        $data['user_data'] = $crudModel->orderBy('apitoken_id', 'ASC')->paginate(20);

        $data['pagination_link'] = $crudModel->pager;

        return view('auth/access_token.php', $data);

    }
    public function add(){
        return view('auth/add_tokens.php');
    }
    public function processAddTokens(){
        $validation = $this->validate([
            'api_token'=>'required',
            'created_at'=>'required',
            'expires_on'=>'required'

        ]);
        
        if(!$validation){
            return view('Tokens/add',['validation'=>$this->validator]);

        }
        else{
            //stores in db
            $api_token =$this->request->getPost('api_token');
            $created_at =$this->request->getPost('created_at');
            $expires_on=$this->request->getPost('expires_on');

            $values=[

              'api_token'=>$api_token,
              'created_at'=>$created_at,
              'expires_on'=>$expires_on,

            ];

            $categorymodel= new TokensModel();
            $query =$categorymodel->insert($values);
            if(!$query){
            return redirect()->back()->with('fail','something is wrong');
            }else{
            return redirect()->to('Tokens/main')->with('sucess','User added successfuly');
            }


        }

    }
}
