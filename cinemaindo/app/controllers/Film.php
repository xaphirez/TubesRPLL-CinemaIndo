<?php

class Film extends Controller{

    public function index()
    {
        $this->view('templates/header');
        $this->view('film/index');
        $this->view('templates/footer');
    }
    
    public function NowPlaying()
    {
        $film_model = $this->model('Film_model');
        $data['nowPlayings'] = $film_model->getAllFilmNowPlaying();

        foreach($data['nowPlayings'] as &$nowPlaying) {
            $film_detail = $film_model->getFilmDetailById($nowPlaying['id']);
            $nowPlaying['detail'] = $film_detail;
        }

        $this->view('templates/header');
        $this->view('film/NowPlaying', $data);
        $this->view('templates/footer');
    }

    public function Upcoming()
    {
        $film_model = $this->model('Film_model');
        $data['upcomings'] = $film_model->getAllFilmUpcoming();

        foreach($data['upcomings'] as &$upcoming) {
            $film_detail = $film_model->getFilmDetailById($upcoming['id']);
            $upcoming['detail'] = $film_detail;
        }

        $this->view('templates/header');
        $this->view('film/Upcoming', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $film_model = $this->model('Film_model');
        $data['film'] = $film_model->getFilmDetailById($id);

        $this->view('templates/header');
        $this->view('film/detail', $data);
        $this->view('templates/footer');
    }
}