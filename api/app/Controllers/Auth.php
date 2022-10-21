<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\libraries\Hash;
use App\Models\UserModel;
use App\Models\APIModel;

class Auth extends BaseController
{
    public function __construct(){
        helper(['url','form']);
    }
    public function index()
    {
        return view('auth/login_option.php');
    }
    public function processAdminLogin(){
        $validation = $this->validate([
            
            'email'=>'required|valid_email|is_unique[users.email]',
            'password'=>'required|min_length[5]|max_length[12]',

        ]);

        if(!$validation){
            return view('auth/login',['validation'=>$this->validator]);
        }else{
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $userModel = new UserModel();
            $user_info = $userModel->where('email', $email)->first();
            $check_password = Hash::check($password, $user_info['password']);

            if(!$check_password){
                session()->setFlashdata('fail','Incorrect Password');
                return redirect()->to('auth/login')->withInput();
            }else{
                $user_id = $user_info['user_id'];
                session()->set('loggedUser',$user_id);
                return redirect()->to('auth/adminHome');
            }
        }


    }

    public function processLogin(){
        //Handle the login backend
        $validation = $this->validate([
            
            'email'=>'required|valid_email|is_unique[users.email]',
            'password'=>'required|min_length[5]|max_length[12]',

        ]);

        if(!$validation){
            return view('auth/login',['validation'=>$this->validator]);
        }else{
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $userModel = new UserModel();
            $user_info = $userModel->where('email', $email)->first();
            $check_password = Hash::check($password, $user_info['password']);

            if(!$check_password){
                session()->setFlashdata('fail','Incorrect Password');
                return redirect()->to('auth/login')->withInput();
            }else{
                $user_id = $user_info['user_id'];
                session()->set('loggedUser',$user_id);
                return redirect()->to('auth/homePage');
            }
        }
        
    }


    public function homePage(){
        //Load the user homepage
        return view('auth/homepage.php');

    }

    public function homeAPI(){
        return view('auth/api_homepage.php');
    }

    public function login(){
        return view('auth/login.php');
    }

    public function adminLogin(){
        return view('auth/admin_login.php');
    }

    


    public function adminHome(){
        return view('auth/admin_view.php');
    }

    public function register(){
        //Loads the register page
        return view('auth/register.php');

    }

    public function processRegistration(){
        //Handle the registration backend fucntionality

        $validation = $this->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|valid_email|is_unique[users.email]',
            'password'=>'required|min_length[5]|max_length[12]',
            'gender'=>'required',
            'role'=>'required'

        ]);
        
        if(!$validation){
            return view('auth/register',['validation'=>$this->validator]);

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

            $usermodel= new UserModel();
            $query =$usermodel->insert($values);
            if(!$query){
            return redirect()->back()->with('fail','something is wrong');
            }else{
            return redirect()->to('auth/login')->with('sucess','You are registered');
            }


        }


        
    }
    public function registerAPI(){
        //Loads the register page
        return view('auth/register_api.php');

    }

    public function processAPIRegistration(){
        //Handle the registration backend fucntionality
        
        $validation = $this->validate([
            'username'=>'required',
            'key'=>'required',
            'added_by'=>'required',
            'created_at'=>'required',
            'updated_on'=>'required'
        ]);
        
        if(!$validation){
            return view('auth/registerAPI',['validation'=>$this->validator]);

        }
        else{
            //stores in db
            $username =$this->request->getPost('username');
            $key =$this->request->getPost('key');
            $added_by =$this->request->getPost('added_by');
            $created_at=$this->request->getPost('created_at');
            $updated_on=$this->request->getPost('updated_on');

            $values=[

              'username'=>$username,
              'key'=>$key,
              'added_by'=>$added_by,
              'created_at'=>$created_at,
              'updated_on'=>$updated_on,
        
            ];

            $usermodel= new APIModel();
            $query =$usermodel->insert($values);
            if(!$query){
            return redirect()->back()->with('fail','something is wrong');
            }else{
            return redirect()->to('auth/homeAPI')->with('sucess','You are registered');
            }
        }


        


        
    }
}
