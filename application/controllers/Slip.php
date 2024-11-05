<?php

class Slip extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_slip');
    }

    public function index()
    {
        $data['santri'] = $this->M_slip->getSantri()->result_array();

        $this->load->view('templates/header');
        $this->load->view('slip/v_tampil', $data);
        $this->load->view('templates/footer');
    }

    function cetak($id)
    {
        $where = ['id_santri' => $id];
        
        // $where = array_map(function($item) {
        //     return str_replace('%20', ' ', $item);
        // }, $where);

        $data = [
            'santri' => $this->M_slip->detail($where)->row_array(),
            'slip' => $this->M_slip->getSlip($where)->result_array(),
            'pimpinan' => $this->db->query("select nama from tb_pengurus where jabatan ='Pimpinan Asrama'")->row_array(),
            'bendahara' => $this->db->query("select nama from tb_pengurus where jabatan ='Bendahara'")->row_array(),
            'penanggung' => $this->db->query("select nama from tb_pengurus where jabatan ='Penanggung Jawab Asrama'")->row_array(),
        ];

        $this->load->view('slip/v_cetak', $data);
    }
}