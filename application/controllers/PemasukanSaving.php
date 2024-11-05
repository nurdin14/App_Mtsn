<?php

class PemasukanSaving Extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_pemasukan_saving');
    }

    public function index() {
        $data['pemasukan'] = $this->M_pemasukan_saving->getPemasukan()->result_array();

        $this->load->view('templates/header');
        $this->load->view('pemasukan_saving/v_tampil', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $this->load->view('templates/header');
        $this->load->view('pemasukan_saving/v_add');
        $this->load->view('templates/footer');

        if (isset($_POST['simpan'])) {
            
            $tambah = [
                'id_saving' => $this->input->post('id_saving'),
                'ket' => $this->input->post('ket'),
                'pemasukan' => $this->input->post('pemasukan'),
                'tgl' => $this->input->post('tgl'),
            ];
            
            $this->M_pemasukan_saving->save($tambah);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong> Data Berhasil Ditambah.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>');
            redirect('PemasukanSaving/index');
        }
    }
    public function edit($id)
    {
        $where = ['id_saving' => $id];
        $data['pemasukan'] = $this->M_pemasukan_saving->detail($where)->row_array();

        $this->load->view('templates/header');
        $this->load->view('pemasukan_saving/v_edit', $data);
        $this->load->view('templates/footer');

        if (isset($_POST['simpan'])) {
            
            $tambah = [
                'id_saving' => $this->input->post('id_saving'),
                'ket' => $this->input->post('ket'),
                'pemasukan' => $this->input->post('pemasukan'),
                'tgl' => $this->input->post('tgl'),
            ];
            
            $this->M_pemasukan_saving->edit($tambah, $where);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong> Data Berhasil Diubah.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>');
            redirect('PemasukanSaving/index');
        }
    }

    function hapus($id) {
        $where = ['id_saving' => $id];
        $this->M_pemasukan_saving->hapus($where);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong> Data Berhasil Dihapus.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>');
        redirect('PemasukanSaving/index');
    }
}