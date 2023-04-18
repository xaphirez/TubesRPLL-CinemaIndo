<?php

class Transaksi_model{
    private $table = "transaksi";
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function tambahTransaksi($data)
    {
        $query = "INSERT INTO transaksi
                    VALUE 
                    ('', :tanggal_transaksi, :no_kursi, :total, :no_tiket, :status_transaksi, :id_user, :id_sesi)";

        $this->db->query($query);
        $this->db->binds(':tanggal_transaksi', $data['tanggalTransaksi']);
        $this->db->binds(':no_kursi', $data['noKursi']);
        $this->db->binds(':total', $data['Total']);
        $this->db->binds(':no_tiket', $data['NoTiket']);
        $this->db->binds(':status_transaksi', $data['status']);
        $this->db->binds(':id_user', $data['UserID']);
        $this->db->binds(':id_sesi', $data['SesiID']);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getTransaksiByIdUser($id_user)
    {
        $query = "SELECT * FROM transaksi WHERE id_user = :id_user";
        $this->db->query($query);
        $this->db->binds('id_user', $id_user);

        return $this->db->resultSet();
    }

    // Method untuk mengambil data transaksi berdasarkan ID transaksi
    public function getTransaksiById($id)
    {
        $query = "SELECT * FROM transaksi WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    // Method untuk mengupdate status transaksi menjadi 'lunas'
    public function updateStatusTransaksi($id)
    {
        $query = "UPDATE transaksi SET status_transaksi = 'lunas' WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
    }

    public function getTransaksiByUser($idUser) {
        $query = "SELECT * FROM transaksi WHERE id_user = :id_user ORDER BY tanggal_transaksi DESC";
        $this->db->query($query);
        $this->db->binds(':id_user', $idUser);
        
        $this->db->execute();
        return $this->db->resultSet();
    }

}