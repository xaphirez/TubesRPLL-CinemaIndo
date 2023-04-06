<?php

class Admin extends Controller{

    public function dashboard()
    {
        $this->view('templates/header');
        $this->view('admin/dashboard');
        $this->view('templates/footer');
    }
}