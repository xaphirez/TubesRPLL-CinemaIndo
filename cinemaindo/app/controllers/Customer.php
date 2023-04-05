<?php

class Customer extends Controller{
    
    public function index()
    {
        $data['judul'] = 'Index Customer';
        $this->view('templates/header', $data);
        $this->view('customer/index');
        $this->view('templates/footer');
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

    public function regis()
    {
        if($this->model('Customer_model')->tambahDataCustomer($_POST)>0){
            header('Location: '. BASEURL . '/customer/login');
            exit;
        }
    }
}