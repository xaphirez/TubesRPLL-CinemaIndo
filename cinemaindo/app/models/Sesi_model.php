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
        $this->db->query('SELECT s.id, s.tanggal_mulai, s.tanggal_selesai, f.nama_film, f.gambar, sc.screen_number, s.waktu_mulai, s.waktu_selesai, s.harga 
                        FROM sesi s 
                        JOIN film f ON s.id_film = f.id 
                        JOIN screen sc ON s.id_screen = sc.id');
        return $this->db->resultSet();
    }    
    
    public function addSession($data)
    {
        
        $query = "INSERT INTO sesi
                    VALUE 
                    ('', :tanggal_mulai, :tanggal_selesai, :waktu_mulai, :waktu_selesai, :harga, :id_film, :id_screen)";

        $this->db->query($query);
        $this->db->binds(':tanggal_mulai', $data['tanggalMulai']);
        $this->db->binds(':tanggal_selesai', $data['tanggalSelesai']);
        $this->db->binds(':waktu_mulai', $data['jamMulai']);
        $this->db->binds(':waktu_selesai', $data['jamSelesai']);
        $this->db->binds(':harga', $data['harga']);
        $this->db->binds(':id_film', $data['filmId']);
        $this->db->binds(':id_screen', $data['screenId']);

        $this->db->execute();

        return $this->db->rowCount();
        
    }
}