<?php

class Sesi_model{
    private $table = "sesi";
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getSesiByID($id)
    {
        $query = "SELECT * FROM sesi WHERE id = :id";
        $this->db->query("$query");
        $this->db->binds('id', $id);
        return $this->db->single();
    }

    public function getSesi()
    {
        $this->db->query('SELECT s.tanggal_mulai, s.tanggal_selesai, f.nama_film, f.gambar, sc.screen_number, s.waktu_mulai, s.waktu_selesai, s.harga 
                        FROM sesi s 
                        JOIN film f ON s.id_film = f.id 
                        JOIN screen sc ON s.id_screen = sc.id');
        return $this->db->resultSet();
    }    
}