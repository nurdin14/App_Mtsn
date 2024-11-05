<?php

class PengeluaranSpp extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('M_pengeluaran_spp');
    }

    public function index()
    {
        $data['pemasukan'] = $this->M_pengeluaran_spp->getPemasukan()->result_array();

        $this->load->view('templates/header');
        $this->load->view('pengeluaran_spp/v_tampil', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $this->load->view('templates/header');
        $this->load->view('pengeluaran_spp/v_add');
        $this->load->view('templates/footer');

        if (isset($_POST['simpan'])) {

            $tambah = [
                'id_kas_spp' => $this->input->post('id_kas_spp'),
                'ket' => $this->input->post('ket'),
                'pengeluaran' => $this->input->post('pengeluaran'),
                'tgl' => $this->input->post('tgl'),
            ];

            $this->M_pengeluaran_spp->save($tambah);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong> Data Berhasil Ditambah.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>');
            redirect('PengeluaranMakan/index');
        }
    }
    public function edit($id)
    {
        $where = ['id_kas_spp' => $id];
        $data['pemasukan'] = $this->M_pengeluaran_spp->detail($where)->row_array();

        $this->load->view('templates/header');
        $this->load->view('pengeluaran_spp/v_edit', $data);
        $this->load->view('templates/footer');

        if (isset($_POST['simpan'])) {

            $tambah = [
                'id_kas_spp' => $this->input->post('id_kas_spp'),
                'ket' => $this->input->post('ket'),
                'pengeluaran' => $this->input->post('pengeluaran'),
                'tgl' => $this->input->post('tgl'),
            ];

            $this->M_pengeluaran_spp->edit($tambah, $where);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong> Data Berhasil Diubah.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>');
            redirect('PengeluaranMakan/index');
        }
    }

    function hapus($id)
    {
        $where = ['id_kas_spp' => $id];
        $this->M_pengeluaran_spp->hapus($where);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong> Data Berhasil Dihapus.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>');
        redirect('PengeluaranMakan/index');
    }
}