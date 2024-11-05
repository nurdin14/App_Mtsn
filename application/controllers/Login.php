<?php

class Login extends CI_Controller {

    public function index() {
        $this->load->view('templates_login/header');
        $this->load->view('login');
        $this->load->view('templates_login/footer');
    }

    function auth() {
       
        $data = [
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        ];

        $cek = $this->db->get_where('tb_user',$data)->row_array();

        if ($cek['role'] == 'user') {
            $dataLogin = [
                'username' => $cek['username'],
                'status_login' => 'Login'
            ];
            $this->session->set_userdata($dataLogin);
            redirect('dashboard/index');
        } else if ($cek['role'] == 'admin') {
            // Tambahkan pengaturan status_login untuk admin jika perlu
            $dataLogin = [
                'username' => $cek['username'],
                'status_login' => 'Login'
            ];
            $this->session->set_userdata($dataLogin);
            redirect('dashboard/index');
        }

    }

    function logout() {
        $this->session->sess_destroy();
        redirect('login/index');
    }
}