<?php

class Transaksi_model{
    private $table = "transaksi";
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function buy_tiket($data)
    {
        // Ambil data harga tiket dan nomor kursi dari database
        $query = "SELECT harga_tiket, no_kursi FROM sesi WHERE id = :id_sesi";
        $this->db->query($query);
        $this->db->binds('id_sesi', $data['id_sesi']);
        $result = $this->db->single();

        // Hitung total harga tiket
        $total_harga = $result['harga_tiket'] * $data['jumlah_tiket'];

        // Cek apakah nomor kursi sudah ada di database
        $query = "SELECT COUNT(*) AS count_kursi FROM transaksi WHERE id_sesi = :id_sesi AND no_kursi = :no_kursi";
        $this->db->query($query);
        $this->db->binds('id_sesi', $data['id_sesi']);
        $this->db->binds('no_kursi', $data['no_kursi']);
        $count_kursi = $this->db->single()['count_kursi'];

        // Jika nomor kursi belum terpakai, masukkan data transaksi ke dalam tabel transaksi
        if ($count_kursi == 0) {
            $query = "INSERT INTO transaksi (tanggal_transaksi, no_kursi, jumlah_pembelian, total, no_tiket, id_user, id_sesi) 
                    VALUES (:tanggal_transaksi, :no_kursi, :jumlah_pembelian, :total, :no_tiket, :id_user, :id_sesi)";
            $this->db->query($query);
            $this->db->binds('tanggal_transaksi', date('Y-m-d'));
            $this->db->binds('no_kursi', $data['no_kursi']);
            $this->db->binds('jumlah_pembelian', $data['jumlah_tiket']);
            $this->db->binds('total', $total_harga);
            $this->db->binds('no_tiket', 'T'.uniqid()); // Generate nomor tiket unik dengan prefix 'T'
            $this->db->binds('id_user', $_SESSION['user_id']);
            $this->db->binds('id_sesi', $data['id_sesi']);
            return $this->db->execute();
        }
        else {
            return false; // Jika nomor kursi sudah terpakai, return false
        }
    }

    
    
    
}