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

    public function pembayaran($transaksiId)
    {   
        $transaksi = $this->model('Transaksi_model')->getTransaksiById($transaksiId);

        $sesi = $this->model('Sesi_model')->getSesiByID($transaksi['id_sesi']);
        $film = $this->model('Film_model')->getFilmDetailById($sesi['id_film']);
    
        $data = [
            'nama_film' => $film['nama_film'],
            'waktu_mulai' => $sesi['waktu_mulai'],
            'no_kursi' => $transaksi['no_kursi'],
            'harga' => $transaksi['total'],
            'id_transaksi' => $transaksi['id']
        ];

        $this->view('templates/header', $data);
        $this->view('transaksi/pembayaran', $data);
        $this->view('templates/footer');
    }
}