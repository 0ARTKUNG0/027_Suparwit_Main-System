<?php

namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index()
    {
        helper(['form']);
        return view('login');
    }

    public function auth()
    {
        $session = session();
        $model = new UserModel();
        
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        
        $data = $model->where('username', $username)->first();
        
        if ($data) {
            $pass = $data['password'];
            $verifyPassword = password_verify($password, $pass);
            
            if ($verifyPassword) {
                $sessionData = [
                    'user_id' => $data['id'],
                    'username' => $data['username'],
                    'logged_in' => TRUE
                ];
                
                $session->set($sessionData);
                return redirect()->to('/news');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Username not Found');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}