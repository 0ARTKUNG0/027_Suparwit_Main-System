<?php

namespace App\Controllers;

use App\Models\UserModel;

class RegisterController extends BaseController
{
    public function index()
    {
        return view('register');
    }

    public function registerUser()
    {
        $model = new UserModel();
        
        $userData = [
            'username' => $this->request->getPost('username'),
            'email'    => $this->request->getPost('email'),
            'password' => $this->request->getPost('password')
        ];

        $preparedData = $model->prepareUserData($userData);
        
        try {
            $model->save($preparedData);
            session()->setFlashdata('success', 'ลงทะเบียนสำเร็จ กรุณาเข้าสู่ระบบ');
            return redirect()->to('/login');
        } catch (\Exception $e) {
            session()->setFlashdata('error', 'เกิดข้อผิดพลาดในการลงทะเบียน กรุณาลองใหม่อีกครั้ง');
            return redirect()->back()->withInput();
        }
    }
}