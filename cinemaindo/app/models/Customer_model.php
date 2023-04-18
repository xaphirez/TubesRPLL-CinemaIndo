<?php

class Customer_model{
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function registerUser($data)
    {
        
        $query = "INSERT INTO user
                    VALUE 
                    ('', :nama_user, :email, :password, :telepon)";

        $this->db->query($query);
        $this->db->binds('nama_user', $data['nama']);
        $this->db->binds('email', $data['email']);
        $this->db->binds('password', $data['password']);
        $this->db->binds('telepon', $data['telepon']);

        $this->db->execute();

        return $this->db->rowCount();
        
    }

    public function checkEmail($email)
    {
        $query = "SELECT * FROM user WHERE email = :email";
        $this->db->query($query);
        $this->db->binds(':email', $email);
        $this->db->single();

        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getUserByEmail($email)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email=:email');
        $this->db->binds(':email', $email);
        return $this->db->resultSet()[0];
    }

    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_user=:id_user');
        $this->db->binds(':id_user', $id);
        return $this->db->resultSet()[0];
    }

    public function updateUser($data)
    {
        $this->db->query('UPDATE ' . $this->table . ' SET nama_user=:nama_user, telepon=:telepon WHERE id_user=:id_user');
        $this->db->binds(':id_user', $data['id_user']);
        $this->db->binds(':nama_user', $data['nama_user']);
        $this->db->binds(':telepon', $data['telepon']);
        return $this->db->execute();
    }
}