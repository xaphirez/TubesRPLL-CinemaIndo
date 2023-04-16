<?php

class Transaksi extends Controller{
    // di dalam TransaksiController.php

    public function beliTiket($sesiId)
    {
        // cek apakah user sudah login atau belum
        if (!$this->isLoggedIn()) {
            // jika belum, redirect ke halaman login
            header('Location: ' . BASEURL . '/user/login');
            exit;
        }

        // dapatkan data sesi berdasarkan ID sesi
        $sesi = $this->model('Sesi')->getSesiById($sesiId);

        // tampilkan halaman pembelian tiket
        $this->view('transaksi/beli_tiket', ['sesi' => $sesi]);
    }


    
}