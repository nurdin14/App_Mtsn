<?php

class PemasukanMakan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pemasukan_makan');
    }

    public function index()
    {
        $data['pemasukan'] = $this->M_pemasukan_makan->getPemasukan()->result_array();

        $this->load->view('templates/header');
        $this->load->view('pemasukan_makan/v_tampil', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $this->load->view('templates/header');
        $this->load->view('pemasukan_makan/v_add');
        $this->load->view('templates/footer');

        if (isset($_POST['simpan'])) {

            $tambah = [
                'id_kas_makan' => $this->input->post('id_kas_makan'),
                'ket' => $this->input->post('ket'),
                'pemasukan' => $this->input->post('pemasukan'),
                'tgl' => $this->input->post('tgl'),
            ];

            $this->M_pemasukan_makan->save($tambah);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong> Data Berhasil Ditambah.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>');
            redirect('PemasukanMakan/index');
        }
    }
    public function edit($id)
    {
        $where = ['id_kas_makan' => $id];
        $data['pemasukan'] = $this->M_pemasukan_makan->detail($where)->row_array();

        $this->load->view('templates/header');
        $this->load->view('pemasukan_makan/v_edit', $data);
        $this->load->view('templates/footer');

        if (isset($_POST['simpan'])) {

            $tambah = [
                'id_kas_makan' => $this->input->post('id_kas_makan'),
                'ket' => $this->input->post('ket'),
                'pemasukan' => $this->input->post('pemasukan'),
                'tgl' => $this->input->post('tgl'),
            ];

            $this->M_pemasukan_makan->edit($tambah, $where);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong> Data Berhasil Diubah.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>');
            redirect('PemasukanMakan/index');
        }
    }

    function hapus($id)
    {
        $where = ['id_kas_makan' => $id];
        $this->M_pemasukan_makan->hapus($where);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong> Data Berhasil Dihapus.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>');
        redirect('PemasukanMakan/index');
    }
}
