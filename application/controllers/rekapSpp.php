<?php

class rekapSpp extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_rekapSpp');
    }

    public function index() {
        $data['bulan'] = $this->db->get('tb_pembayaran')->result_array();

        $this->load->view('templates/header');
        $this->load->view('rekapSpp/v_tampil', $data);
        $this->load->view('templates/footer');
    }
    public function cetak() {

        $bln_start = $this->input->post('bln_start');
        $bln_end = $this->input->post('bln_end');
        $keterangan = $this->input->post('keterangan');

        $data['rekap'] = $this->M_rekapSpp->getRekap($bln_start, $bln_end, $keterangan)->result_array();
        
        $data['bln_start'] = $bln_start;
        $data['bln_end'] = $bln_end;
        $this->load->view('rekapSpp/v_cetak', $data);
    }
}