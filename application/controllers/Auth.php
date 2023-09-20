<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

    function __construct()
	{
	parent::__construct();
	$this->load->model('m_model');
	$this->load->helper('my_helper');
    }

    
	public function index()
	{
		$this->load->view('auth/login');
	}

	public function register()
	{
		$this->load->view('auth/register');
	}

	public function aksi_login()
{
    $email = $this->input->post('email', true);
    $password = $this->input->post('password', true);
    $data = [
        'email' => $email,
    ];
    $query = $this->m_model->getwhere('admin', $data);
    $result = $query->row_array();

    if (!empty($result) && md5($password) === $result['password']) {
        $data = [
            'logged_in' => TRUE,
            'email' => $result['email'],
            'username' => $result['username'],
            'role' => $result['role'],
            'id' => $result['id'],
        ];
        $this->session->set_userdata($data);
        if  
           ( redirect(base_url()."admin"));
        else {
            redirect(base_url()."auth");
        }
    } else {
        // Tampilkan pesan kesalahan kepada pengguna
        $this->session->set_flashdata('error', 'Email atau kata sandi salah.');
        redirect(base_url().'auth');
    }
}
public function aksi_register()
{
    $this->load->library('form_validation');
    
    // Validasi input form
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]'); // Menambahkan aturan min_length[8]

    if ($this->form_validation->run() == FALSE) {
        // Jika validasi gagal, tampilkan pesan error atau form registrasi lagi
        //  $this->load->view('registrasi_form');
    } else {
        // Jika validasi sukses, simpan data ke database
        $email = $this->input->post('email', true);
        $password = md5($this->input->post('password', true)); // Enkripsi password dengan MD5

        $data = [
            'email' => $email,
            'password' => $password, // Simpan password yang telah dienkripsi
        ];

        $this->m_model->tambah_data('admin', $data);

        // Redirect ke halaman setelah registrasi
        redirect(base_url('auth'));
    }
}
function logout() {
    $this->session->sess_destroy(); // Menggunakan sess_destroy() untuk mengakhiri sesi
    redirect(base_url('auth'));
   }  
}