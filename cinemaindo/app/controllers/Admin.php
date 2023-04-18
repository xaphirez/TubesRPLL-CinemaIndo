<?php

class Admin extends Controller{
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
        $this->view('templates_admin/header');
        $this->view('admin/index');
        $this->view('templates/footer');
    }

    public function login()
    {
        $data = [];
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // cek apakah email dan password sesuai dengan data di database
            $adminModel = $this->model('Admin_model');
            $admin = $adminModel->getUserByEmail($email);
            
            if ($admin) {
                if (password_verify($password, $admin['password_admin'])) {
                    // mulai sesi jika belum ada sesi yang aktif
                    if (session_status() == PHP_SESSION_NONE) {
                        session_name("admin_session");
                        session_start();
                    }
                    
                    $_SESSION['id'] = $admin['id'];
                    $_SESSION['email_admin'] = $admin['email_admin'];
                    $_SESSION['nama_admin'] = $admin['nama_admin'];

                    //set is_logged_in menjadi true
                    $data['is_logged_in'] = true;

                    // redirect ke halaman utama
                    header('Location: ' . BASEURL . '/admin/index');
                    exit;
                } else {    
                    $data['error'] = 'Password salah';
                }
            } else {
                $data['error'] = 'Email tidak ditemukan';
            }
        }

        $this->view('templates_admin/header');
        $this->view('admin/login', $data);
        $this->view('templates/footer');
    }

    public function register()
    {
        $data = [];
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $data = [
            'nama' => $_POST['nama'],
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),   
        ];

        // insert data pengguna ke database

        $adminModel = $this->model('Admin_model');
        if ($adminModel->registerAdmin($data)) {
            // redirect ke halaman login
            header('Location: ' . BASEURL . '/admin/login');
            exit;
        } else {
            $data['error'] = 'Gagal mendaftar pengguna';
        }
    }

        $this->view('templates_admin/header');
        $this->view('admin/register', $data);
        $this->view('templates/footer');
    }
    public function logout()
    {
        session_unset();
        session_destroy();
        header('Location: ' . BASEURL . '/admin/login');
        exit;
    }

    public function addSession()
    {
        // Panggil model Film dan Screen
        $filmModel = $this->model('Film_model');
        $screenModel = $this->model('Screen_model');

        // Ambil data film dan screen dari model
        $data['nowPlayings'] = $filmModel->getAllFilmNowPlaying();
        $data['screens'] = $screenModel->getAllScreens();

        // Jika ada data yang dikirim melalui method POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Panggil model Session
            $sessionModel = $this->model('Sesi_model');

            // Ambil data dari form

            $data = [
                'filmId' => $_POST['film'],
                'screenId' => $_POST['screen'],
                'tanggalMulai' => $_POST['tanggal_mulai'],
                'tanggalSelesai' => $_POST['tanggal_selesai'],
                'jamMulai' => $_POST['waktu_mulai'],
                'jamSelesai' => $_POST['waktu_selesai'],
                'harga' => $_POST['harga']
            ];

            if ($sessionModel->addSession($data)) {
                // Jika berhasil, redirect ke halaman admin
                header('Location: ' . BASEURL . '/admin');
                exit;
            } else {
                $error = 'Terjadi kesalahan saat menambahkan sesi!';
            }

            // Tampilkan halaman form penambahan sesi jika method request adalah GET
            
        }
        $this->view('templates_admin/header');
        $this->view('admin/addSession', $data);
        $this->view('templates/footer');
    }

    public function tambah_film()
    {
        $data = [];
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            // Pengecekan apakah file gambar telah diunggah atau tidak
            if (!isset($_FILES['gambar']) || !is_uploaded_file($_FILES['gambar']['tmp_name'])) {
                $data['error'] = 'File gambar tidak ditemukan atau terjadi kesalahan saat mengunggah';

                $this->view('templates_admin/header');
                $this->view('admin/tambah_film', $data);
                $this->view('templates/footer');
                return;
            }
            
            // Pengecekan apakah file gambar memiliki ekstensi yang diizinkan
            $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif');
            $uploaded_file_extension = strtolower(pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION));

            if (!in_array($uploaded_file_extension, $allowed_extensions)) {
                $data['error'] = 'File yang diunggah harus berupa file gambar dengan ekstensi JPG, JPEG, PNG, atau GIF.';
                $this->view('templates_admin/header');
                $this->view('admin/tambah_film', $data);
                $this->view('templates/footer');
                return;
            }
            
            // Pengecekan apakah file gambar melebihi ukuran yang diizinkan
            $max_file_size = 40 * 1024 * 1024; // ukuran maksimal file dalam byte (40 MB)
            
            if ($_FILES['gambar']['size'] > $max_file_size) {
                $data['error'] = 'Ukuran file gambar melebihi batas maksimal 40 MB.';
                $this->view('templates_admin/header');
                $this->view('admin/tambah_film', $data);
                $this->view('templates/footer');
                return;
            }

            $gambar = $_FILES['gambar']['name'];
            $gambar_tmp = $_FILES['gambar']['tmp_name'];
            move_uploaded_file($gambar_tmp, 'gambar/' . $gambar);
            
            $data = [
                'namaFilm' => $_POST['nama_film'],
                'genre' => $_POST['genre'],
                'durasi' => $_POST['durasi'],
                'sinopsis' => $_POST['sinopsis'],
                'rating' => $_POST['rating'],
                'gambar' => $gambar,
                'status' => $_POST['status'],
            ];

            $adminModel = $this->model('Admin_model');
            if ($adminModel->addMovie($data)) {
                // redirect ke halaman login
                header('Location: ' . BASEURL . '/admin/tambah_film');
                exit;
            } else {
                $data['error'] = 'Gagal mendaftar pengguna';
            }
        }
        
        $this->view('templates_admin/header');
        $this->view('admin/tambah_film', $data);
        $this->view('templates/footer');
    }

}