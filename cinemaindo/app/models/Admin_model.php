<?php

class Admin_model{
    private $table = 'admin';
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function registerAdmin($data)
    {
        
        $query = "INSERT INTO admin
                    VALUE 
                    ('', :nama_admin, :email_admin, :password_admin)";

        $this->db->query($query);
        $this->db->binds('nama_admin', $data['nama']);
        $this->db->binds('email_admin', $data['email']);
        $this->db->binds('password_admin', $data['password']);

        $this->db->execute();

        return $this->db->rowCount();
        
    }

    public function getUserByEmail($email)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email_admin=:email_admin');
        $this->db->binds(':email_admin', $email);
        return $this->db->resultSet()[0];
    }

    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_admin=:id_admin');
        $this->db->binds(':id_admin', $id);
        return $this->db->resultSet()[0];
    }

    public function addMovie($data) {
        $query = "INSERT INTO film
                    VALUES
                    ('',:nama_film, :genre, :durasi, :sinopsis, :rating, :gambar, :status)";

        $this->db->query($query);
        $this->db->binds('nama_film', $data['namaFilm']);
        $this->db->binds('genre', $data['genre']);
        $this->db->binds('durasi', $data['durasi']);
        $this->db->binds('sinopsis', $data['sinopsis']);
        $this->db->binds('rating', $data['rating']);
        $this->db->binds('gambar', $data['gambar']);
        $this->db->binds('status', $data['status']);

        $this->db->execute();

        return $this->db->rowCount();
    }

}