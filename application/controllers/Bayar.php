<?php 

class Bayar extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('M_pembayaran');
        $this->load->model('M_santri');
    }

    public function index() {

        $nama_santri = $this->input->post('nama_santri');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $keterangan = $this->input->post('keterangan');
        
        $data['pembayaran'] = $this->M_pembayaran->searchPembayaran($nama_santri, $bulan, $keterangan, $tahun)->result_array();

        $this->load->view('templates/header');
        $this->load->view('bayar/v_tampil', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $where = ['id_pembayaran' => $id];
        $data = [
            'pembayaran' => $this->M_pembayaran->detail($where)->row_array(),
            'santri' => $this->M_santri->getSantri()->result_array(),
        ];

        $this->load->view('templates/header');
        $this->load->view('bayar/v_edit', $data);
        $this->load->view('templates/footer');

        if (isset($_POST['simpan'])) {

            $tambah = [
                'id_pembayaran' => $this->input->post('id_pembayaran'),
                'nama_santri' => $this->input->post('nama_santri'),
                'tgl' => date('Y-m-d'),
                'spp' => $this->input->post('spp'),
                'uang_makan' => $this->input->post('uang_makan'),
                'keterangan' => $this->input->post('keterangan'),
            ];
            $this->M_pembayaran->edit($tambah, $where);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong> Pembayaran Berhasil.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>');
            redirect('bayar/index');
        }
    }
}