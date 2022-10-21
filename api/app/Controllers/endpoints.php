<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ItemsModel;

use CodeIgniter\RESTful\ResourceController;

class endpoints extends ResourceController
{
    protected $format = 'json';

    public function users()
    {
        $userModel = new UserModel();
        $users = $userModel->findAll();
        return $this->respond($users);
    }

    public function usersByEmail($email)
    {
        $userModel = new UserModel();
        $users = $userModel->where('email', $email)->findAll();
        return $this->respond($users);
    }

    public function usersByGender($gender)
    {
        $userModel = new UserModel();
        $users = $userModel->where('gender', $email)->findAll();
        return $this->respond($users);
    }

    public function products()
    {
        $itemModel = new ItemsModel();
        $items = $itemModel->findAll();
        return $this->respond($items);
    }

}
