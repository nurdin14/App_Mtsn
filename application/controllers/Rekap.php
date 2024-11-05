<?php

class Rekap extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_rekap');
    }

    public function index() {
        $this->load->view('templates/header');
        $this->load->view('rekap/v_tampil');
        $this->load->view('templates/footer');
    }
    public function cetak() {

        $tgl_start = $this->input->post('tgl_start');
        $tgl_end = $this->input->post('tgl_end');

        $data['rekap'] = $this->M_rekap->getRekap($tgl_start, $tgl_end)->result_array();
        
        $data['tgl_start'] = $tgl_start;
        $data['tgl_end'] = $tgl_end;
        $this->load->view('rekap/v_cetak', $data);
    }
}