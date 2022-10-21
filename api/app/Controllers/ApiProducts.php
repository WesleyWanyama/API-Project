<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

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
}