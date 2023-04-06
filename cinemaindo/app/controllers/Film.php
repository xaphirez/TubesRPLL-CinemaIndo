<?php

class Film extends Controller{
    
    public function index()
    {
        $film_model = $this->model('Film_model');
        $data['films'] = $film_model->getAllFilm();
        $this->view('film/index', $data);
    }
}