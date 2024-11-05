<?php

class PengeluaranSaving extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('M_pengeluaran_saving');
    }

    public function index()
    {
        $data['pemasukan'] = $this->M_pengeluaran_saving->getPemasukan()->result_array();

        $this->load->view('templates/header');
        $this->load->view('pengeluaran_saving/v_tampil', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $this->load->view('templates/header');
        $this->load->view('pengeluaran_saving/v_add');
        $this->load->view('templates/footer');

        if (isset($_POST['simpan'])) {

            $tambah = [
                'id_saving' => $this->input->post('id_saving'),
                'ket' => $this->input->post('ket'),
                'pengeluaran' => $this->input->post('pengeluaran'),
                'tgl' => $this->input->post('tgl'),
            ];

            $this->M_pengeluaran_saving->save($tambah);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong> Data Berhasil Ditambah.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>');
            redirect('PengeluaranSaving/index');
        }
    }
    public function edit($id)
    {
        $where = ['id_saving' => $id];
        $data['pemasukan'] = $this->M_pengeluaran_saving->detail($where)->row_array();

        $this->load->view('templates/header');
        $this->load->view('pengeluaran_saving/v_edit', $data);
        $this->load->view('templates/footer');

        if (isset($_POST['simpan'])) {

            $tambah = [
                'id_saving' => $this->input->post('id_saving'),
                'ket' => $this->input->post('ket'),
                'pengeluaran' => $this->input->post('pengeluaran'),
                'tgl' => $this->input->post('tgl'),
            ];

            $this->M_pengeluaran_saving->edit($tambah, $where);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong> Data Berhasil Diubah.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>');
            redirect('PengeluaranSaving/index');
        }
    }

    function hapus($id)
    {
        $where = ['id_saving' => $id];
        $this->M_pengeluaran_saving->hapus($where);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong> Data Berhasil Dihapus.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>');
        redirect('PengeluaranSaving/index');
    }
}