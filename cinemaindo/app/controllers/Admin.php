<?php

class Admin extends Controller{

    public function dashboard()
    {
        $this->view('templates/templates_customer/header_customer');
        $this->view('admin/dashboard');
        $this->view('templates/footer');
    }
}