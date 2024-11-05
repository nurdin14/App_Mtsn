<?php

class Pengeluaran extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('M_pengeluaran');
    }

    public function index()
    {
        $data['pemasukan'] = $this->M_pengeluaran->getPemasukan()->result_array();

        $this->load->view('templates/header');
        $this->load->view('pengeluaran/v_tampil', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $this->load->view('templates/header');
        $this->load->view('pengeluaran/v_add');
        $this->load->view('templates/footer');

        if (isset($_POST['simpan'])) {

            $tambah = [
                'id_kas' => $this->input->post('id_kas'),
                'ket' => $this->input->post('ket'),
                'pengeluaran' => $this->input->post('pengeluaran'),
                'tgl' => $this->input->post('tgl'),
            ];

            $this->M_pengeluaran->save($tambah);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong> Data Berhasil Ditambah.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>');
            redirect('pengeluaran/index');
        }
    }
    public function edit($id)
    {
        $where = ['id_kas' => $id];
        $data['pemasukan'] = $this->M_pengeluaran->detail($where)->row_array();

        $this->load->view('templates/header');
        $this->load->view('pengeluaran/v_edit', $data);
        $this->load->view('templates/footer');

        if (isset($_POST['simpan'])) {

            $tambah = [
                'id_kas' => $this->input->post('id_kas'),
                'ket' => $this->input->post('ket'),
                'pengeluaran' => $this->input->post('pengeluaran'),
                'tgl' => $this->input->post('tgl'),
            ];

            $this->M_pengeluaran->edit($tambah, $where);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong> Data Berhasil Diubah.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>');
            redirect('pengeluaran/index');
        }
    }

    function hapus($id)
    {
        $where = ['id_kas' => $id];
        $this->M_pengeluaran->hapus($where);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong> Data Berhasil Dihapus.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>');
        redirect('pengeluaran/index');
    }
}