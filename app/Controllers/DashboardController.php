<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function index()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }

        $data = [
            'username' => $session->get('username'),
            'title' => 'Dashboard'
        ];

        return view('dashboard', $data);
    }
}