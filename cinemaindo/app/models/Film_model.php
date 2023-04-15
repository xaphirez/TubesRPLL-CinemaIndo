<?php

class Film_model{
    private $table = 'film';
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getAllFilms() {
        $query = "SELECT * FROM film";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getAllFilmNowPlaying()
    {
        $query = "SELECT * FROM film WHERE status = 'now playing'";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getAllFilmUpcoming()
    {
        $query = "SELECT * FROM film WHERE status = 'upcoming'";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getFilmDetailById($id)
    {
        $query = "SELECT * FROM film WHERE id = :id";
        $this->db->query($query);
        $this->db->binds('id', $id);
        return $this->db->single();
    }
}