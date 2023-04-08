<?php

class Film extends Controller{
    
    public function index()
    {
        $film_model = $this->model('Film_model');
        $data['films'] = $film_model->getAllFilm();

        $this->view('templates/header');
        $this->view('film/NowPlaying', $data);
        $this->view('templates/footer');
    }
}