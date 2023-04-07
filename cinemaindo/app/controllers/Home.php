<?php

class Home extends Controller{

    public function index()
    {
        $data['judul'] = 'CinemaIndo';
        $this->view('templates/header', $data);
        $this->view('Home/index');
        $this->view('templates/footer');
    }

    public function BeforeLogin()
    {
        $data['judul'] = 'BeforeLogin';
        $this->view('templates/templates_customer/header_customer', $data);
        $this->view('Home/BeforeLogin');
        $this->view('templates/templates_customer/footer_customer');
    }
}