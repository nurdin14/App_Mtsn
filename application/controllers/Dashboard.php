<?php

class Dashboard extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status_login') != 'Login') {
            redirect('login/index');
        }
    }

    public function index() {

        $this->load->view('templates/header');
        $this->load->view('v_dashboard');
        $this->load->view('templates/footer');
    }
}