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
        if (!isset($_SESSION['id_user'])) {
            // redirect ke halaman login jika user belum login
            header('Location: ' . BASEURL . '/customer/login');
            exit;
        }

        $this->view('templates/header');
        $this->view('customer/home');
        $this->view('templates/footer');
    }

    public function login()
    {
        $data = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // cek apakah email dan password sesuai dengan data di database
            $customerModel = $this->model('Customer_model');
            $customer = $customerModel->getUserByEmail($email);
            if ($customer) {
                if (password_verify($password, $customer['password'])) {
                    // mulai sesi jika belum ada sesi yang aktif
                    if (session_status() == PHP_SESSION_NONE) {
                        session_start();
                    }
                    
                    $_SESSION['id_user'] = $customer['id_user'];
                    $_SESSION['email'] = $customer['email'];
                    $_SESSION['nama_user'] = $customer['nama_user'];
                    $_SESSION['telepon'] = $customer['telepon'];

                    //set is_logged_in menjadi true
                    $data['is_logged_in'] = true;

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
    
    public function profile()
    {
        $userModel = $this->model('Customer_model');
        $user = $userModel->getUserById($_SESSION['id_user']);
        $data['user'] = $user;
        $data['judul'] = 'Profile';
        $this->view('templates/header', $data);
        $this->view('customer/profile', $data);
        $this->view('templates/footer');
    }

    public function History()
    {
        $data['judul'] = 'History';
        $this->view('templates/header', $data);
        $this->view('customer/History');
        $this->view('templates/footer');
    }

    public function editprofil()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $userModel = $this->model('Customer_model');
            $data = [
                'id_user' => $_SESSION['id_user'],
                'nama_user' => $_POST['nama_user'],
                'telepon' => $_POST['telepon']
            ];
            if ($userModel->updateUser($data) > 0) {
                $_SESSION['success_message'] = 'Data profile berhasil diupdate.';
                header('Location: ' . BASEURL . '/customer/profile');
                exit;
            } else {
                $_SESSION['error_message'] = 'Data profile gagal diupdate.';
                header('Location: ' . BASEURL . '/customer/profile');
                exit;
            }
        }

        $data['judul'] = 'editprofil';
        $this->view('templates/header', $data);
        $this->view('customer/editprofil', $data);
        $this->view('templates/footer');
    }



    public function logout()
    {
        session_unset();
        session_destroy();
        header('Location: ' . BASEURL . '/customer/login');
        exit;
    }
}