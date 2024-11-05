<?php

class RekapSaving extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_rekap_saving');
    }

    public function index() {
        $this->load->view('templates/header');
        $this->load->view('rekap_saving/v_tampil');
        $this->load->view('templates/footer');
    }
    public function cetak() {

        $tgl_start = $this->input->post('tgl_start');
        $tgl_end = $this->input->post('tgl_end');

        $data['rekap'] = $this->M_rekap_saving->getRekap($tgl_start, $tgl_end)->result_array();
        
        $data['tgl_start'] = $tgl_start;
        $data['tgl_end'] = $tgl_end;
        $this->load->view('rekap_saving/v_cetak', $data);
    }
}