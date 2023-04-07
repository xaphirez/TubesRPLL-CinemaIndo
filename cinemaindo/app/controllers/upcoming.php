<?php

class Upcoming extends Controller{

    public function index()
    {
        $data['judul'] = 'CinemaIndo';
        $this->view('templates/header', $data);
        $this->view('upcoming/index');
        $this->view('templates/footer');
    }
}