<?php

class Transaksi extends Controller{
    protected $sesiModel;
    protected $filmModel;
    protected $screenModel;

    public function __construct() 
    {
        $this->sesiModel = $this->model('Sesi_model');
        $this->filmModel = $this->model('Film_model');
        $this->screenModel = $this->model('Screen_model');
    }

    public function index()
    {
        // Mengambil semua data sesi dari model
        $sesi = $this->sesiModel->getSesi();
            
        // Mengambil data film dari model
        $films = $this->filmModel->getAllFilms();

        // Mengambil data screen dari model
        $screens = $this->screenModel->getAllScreens();

        // Mengirim data ke view
        $data = [
            'sesi' => $sesi,
            'films' => $films,
            'screens' => $screens
        ];

        $this->view('templates/header');
        $this->view('sesi/index', $data);
        $this->view('templates/footer');
    }
    public function beli_tiket($sesi_id)
{
    // dapatkan data sesi berdasarkan ID sesi
    $sesi = $this->model('Sesi_model')->getSesiById($sesi_id);

    // Mengambil data film dari model
    $films = $this->filmModel->getAllFilms();

    // Mengambil data screen dari model
    $screens = $this->screenModel->getAllScreens();

    // Mengirim data ke view
    $data = [
        'sesi' => $sesi,
        'films' => $films,
        'screens' => $screens
    ];

    // tampilkan halaman pembelian tiket
    $this->view('templates/header');
    $this->view('transaksi/beli_tiket', $data);
    $this->view('templates/footer');
}

}