<?php

class Customer extends Controller{
    
    public function index()
    {
        
    }

    public function register()
    {
        $data['judul'] = 'Form Registrasi';
        
        $this->view('templates/header', $data);
        $this->view('customer/register');
        $this->view('templates/footer');
    }

    public function login()
    {
        $data['judul'] = 'Form Login';

        $this->view('templates/header', $data);
        $this->view('customer/login');
        $this->view('templates/footer');
    }
}