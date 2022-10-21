<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ItemsModel;

class Products extends BaseController
{
    public function __construct(){
        helper(['url','form']);
    }

    public function index()
    {
        return view('auth/view_products.php');
    }
}
