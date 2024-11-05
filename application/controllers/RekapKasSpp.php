<?php

class RekapKasSpp extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_rekap_kas_spp');
    }

    public function index() {
        $this->load->view('templates/header');
        $this->load->view('rekap_kas_spp/v_tampil');
        $this->load->view('templates/footer');
    }
    public function cetak() {

        $tgl_start = $this->input->post('tgl_start');
        $tgl_end = $this->input->post('tgl_end');

        $data['rekap'] = $this->M_rekap_kas_spp->getRekap($tgl_start, $tgl_end)->result_array();
        
        $data['tgl_start'] = $tgl_start;
        $data['tgl_end'] = $tgl_end;
        $this->load->view('rekap_kas_spp/v_cetak', $data);
    }
}