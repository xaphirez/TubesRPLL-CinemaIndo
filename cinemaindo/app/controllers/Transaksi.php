<?php

class Transaksi extends Controller{
    protected $sesiModel;
    protected $filmModel;
    protected $screenModel;
    protected $transaksiModel;

    public function __construct() 
    {
        $this->sesiModel = $this->model('Sesi_model');
        $this->filmModel = $this->model('Film_model');
        $this->screenModel = $this->model('Screen_model');
        $this->transaksiModel = $this->model('Transaksi_model');
    }

    public function beli_tiket($sesi_id)
    {
        // dapatkan data sesi berdasarkan ID sesi
        $sesi = $this->model('Sesi_model')->getSesiById($sesi_id);

        // Mengambil data film dari model
        $film = $this->model('Film_model')->getFilmDetailById($sesi['id_film']);

        // Mengirim data ke view
        $data = [
            'nama_film' => $film['nama_film'],
            'gambar' => $film['gambar'],
            'waktu_mulai' => $sesi['waktu_mulai'],
            'tanggal_mulai' => $sesi['tanggal_mulai'],
            'harga' => $sesi['harga'],
            'id_sesi' => $sesi['id'],
        ];

        // tampilkan halaman pembelian tiket
        $this->view('templates/header');
        $this->view('transaksi/beli_tiket', $data);
        $this->view('templates/footer');
    }

    public function proses_beli_tiket()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $transaksiModel = $this->model('Transaksi_model');
            
            $data = [
                'tanggalTransaksi' => $_POST['TanggalTransaksi'],
                'noKursi' => $_POST['NoKursi'],
                'Total' => $_POST['total_harga'],
                'NoTiket' => $_POST['NoTiket'],
                'status' => 'pending',
                'UserID' => $_POST['id_user'],
                'SesiID' => $_POST['id_sesi'],
            ];

            if ($transaksiModel->tambahTransaksi($data)) {
                header('Location: ' . BASEURL . '/transaksi/pembayaran');
                exit;
            } else {
                $error = 'Terjadi kesalahan saat menambahkan sesi!';
            }
        }  
    }

    public function pembayaran()
    {
        $transaksiModel = $this->model('Transaksi_model');
        $dataTransaksi = $transaksiModel->getTransaksiByIdUser($_SESSION['id_user']);        
            
        $data = [
            'judul' => 'Pembayaran',
            'data_transaksi' => $dataTransaksi
        ];   


        $this->view('templates/header', $data);
        $this->view('transaksi/pembayaran', $data);
        $this->view('templates/footer');
    }

    public function proses_pembayaran()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Ambil data transaksi berdasarkan id_transaksi yang dikirimkan dari form
            $transaksiModel = $this->model('Transaksi_model');
            $transaksi = $transaksiModel->getTransaksiById($_POST['id_transaksi']);

            // Jika transaksi ditemukan dan statusnya masih pending, maka ubah status transaksi menjadi sukses
            if ($transaksi && $transaksi['status_transaksi'] == 'pending') {
                $transaksiModel->updateStatusTransaksi($transaksi['id'], 'done');
                
                header('Location: ' . BASEURL . '/transaksi/pembayaran');
                exit();
            }
        }
    }
}