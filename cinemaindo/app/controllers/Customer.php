<?php

class Customer extends Controller{
    
    public function index()
    {
        $data['judul'] = 'Index Customer';
        $this->view('templates/header', $data);
        $this->view('customer/index');
        $this->view('templates/footer');
    }

    public function register()
    {
        $data['judul'] = 'Form Registrasi';
        
        $this->view('templates/header', $data);
        $this->view('customer/register');
        $this->view('templates/footer');
    }

    public function home()
    {
        $this->view('templates/templates_customer/header_customer');
        $this->view('customer/home');
        $this->view('templates/templates_customer/footer_customer');
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // cek apakah email dan password sesuai dengan data di database
            $customerModel = $this->model('Customer_model');
            $customer = $customerModel->getUserByEmail($email);
            if ($customer) {
                if (password_verify($password, $customer['password'])) {
                    // simpan data user ke session
                    $_SESSION['id_user'] = $customer['id'];
                    $_SESSION['email'] = $customer['email'];
                    $_SESSION['nama_user'] = $customer['nama'];
                    $_SESSION['telepon'] = $customer['telepon'];

                    // redirect ke halaman utama
                    header('Location: ' . BASEURL . '/customer/home');
                    exit;
                } else {
                    $data['error'] = 'Password salah';
                }
            } else {
                $data['error'] = 'Email tidak ditemukan';
            }
        }

        $this->view('templates/header');
        $this->view('customer/login', $data);
        $this->view('templates/footer');
    }

    public function regis()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $data = [
            'nama' => $_POST['nama'],
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'telepon' => $_POST['telepon']       
        ];

        // insert data pengguna ke database
        $customerModel = $this->model('Customer_model');
        if ($customerModel->registerUser($data)) {
            // redirect ke halaman login
            header('Location: ' . BASEURL . '/customer/login');
            exit;
        } else {
            $data['error'] = 'Gagal mendaftar pengguna';
        }
    }

        $this->view('templates/header');
        $this->view('customer/register', $data);
        $this->view('templates/footer');
    }
    
    public function Profil()
    {
        $data['judul'] = 'Profil';
        $this->view('templates/templates_customer/header_customer', $data);
        $this->view('customer/Profil');
        $this->view('templates/templates_customer/footer_customer');
    }

    public function History()
    {
        $data['judul'] = 'History';
        $this->view('templates/templates_customer/header_customer', $data);
        $this->view('customer/History');
        $this->view('templates/templates_customer/footer_customer');
    }
}