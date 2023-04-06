<?php

class Customer_model{
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }
    

    public function tambahDataCustomer($data)
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
   
}