<?php

class Admin extends Controller{

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
                        session_start();
                    }
                    
                    $_SESSION['id_admin'] = $admin['id_admin'];
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
}