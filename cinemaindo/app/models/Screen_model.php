<?php

class Screen_model{

    private $table = "screen";
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getAllScreens()
    {
        $query = "SELECT * FROM screen";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    
    
}