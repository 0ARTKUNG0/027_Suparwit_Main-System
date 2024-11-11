<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

abstract class BaseController extends Controller
{
    protected $request;
    protected $helpers = ['cookie', 'form'];

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
    }

    protected function isLoggedIn()
    {
        return session()->get('isLoggedIn');
    }

    protected function requireLogin()
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('/login');
        }
    }

    protected function requireAdmin()
    {
        if (!$this->isLoggedIn() || session()->get('role') !== 'admin') {
            return redirect()->to('/login');
        }
    }
}