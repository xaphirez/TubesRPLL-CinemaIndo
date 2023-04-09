<?php

class Film extends Controller{
    
    public function NowPlaying()
    {
        $film_model = $this->model('Film_model');
        $data['nowPlayings'] = $film_model->getAllFilmNowPlaying();

        $this->view('templates/header');
        $this->view('film/NowPlaying', $data);
        $this->view('templates/footer');
    }

    public function Upcoming()
    {
        $film_model = $this->model('Film_model');
        $data['upcomings'] = $film_model->getAllFilmUpcoming();

        $this->view('templates/header');
        $this->view('film/Upcoming', $data);
        $this->view('templates/footer');
    }
}