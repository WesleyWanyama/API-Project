<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\PurchasesModel;

class Purchases extends BaseController
{
    public function __construct(){
        helper(['url','form']);
    }

    public function main()
    {
        $crudModel = new PurchasesModel();

        $data['user_data'] = $crudModel->orderBy('purchase_id', 'ASC')->paginate(20);

        $data['pagination_link'] = $crudModel->pager;

        return view('auth/admin_purchases.php', $data);
    }
    public function user()
    {
        $crudModel = new PurchasesModel();

        $data['user_data'] = $crudModel->orderBy('purchase_id', 'ASC')->paginate(20);

        $data['pagination_link'] = $crudModel->pager;

        return view('auth/view_purchases.php', $data);
    }
    public function receipt()
    {
        $crudModel = new PurchasesModel();

        $data['user_data'] = $crudModel;

        return view('auth/receipts.php', $data);
    }
    public function checkout()
    {
        return view('auth/checkout.php');
    }
}
