<?php

class Film_model{
    private $table = 'film';
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getAllFilm() {
        $query = "SELECT * FROM film";
        $this->db->query($query);
        return $this->db->resultSet();
    }
}