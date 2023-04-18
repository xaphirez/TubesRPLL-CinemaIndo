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

    public function getTransaksiById($id_transaksi)
    {
        $query = "SELECT * FROM transaksi WHERE id = :id";
        $this->db->query($query);
        $this->db->binds(':id', $id_transaksi);
    }

    public function getTransaksiByIdUser($id_user)
    {
        $query = "SELECT * FROM transaksi WHERE id_user = :id_user";
        $this->db->query($query);
        $this->db->binds('id_user', $id_user);

        return $this->db->resultSet();
    }

    public function updateStatusTransaksi($idTransaksi, $status)
    {
        $query = "UPDATE transaksi SET status_transaksi = :status WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('status', $status);
        $this->db->bind('id', $idTransaksi);

        $this->db->execute();
        return $this->db->rowCount();
    }

}