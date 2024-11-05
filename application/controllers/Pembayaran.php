<?php 

class Pembayaran extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('M_pembayaran');
        $this->load->model('M_santri');
    }

    public function index() {
        $data['pembayaran'] = $this->M_pembayaran->getPembayaran()->result_array();

        $this->load->view('templates/header');
        $this->load->view('pembayaran/v_tampil', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['santri'] = $this->M_santri->getSantri()->result_array();

        $this->load->view('templates/header');
        $this->load->view('pembayaran/v_add', $data);
        $this->load->view('templates/footer');

        if (isset($_POST['simpan'])) {

            // $tanggl = $this->input->post('bulan');
            // $dateObject = new DateTime($tanggl);

            // $months = [
            //     1 => 'Januari',
            //     2 => 'Februari',
            //     3 => 'Maret',
            //     4 => 'April',
            //     5 => 'Mei',
            //     6 => 'Juni',
            //     7 => 'Juli',
            //     8 => 'Agustus',
            //     9 => 'September',
            //     10 => 'Oktober',
            //     11 => 'November',
            //     12 => 'Desember'
            // ];


            // $monthNumber = $dateObject->format('n');

            // $monthName = $months[$monthNumber];

            // $year = $dateObject->format('Y');

            // $formattedDate = $monthName . ' ' . $year;

            $tambah = [
                'id_pembayaran' => $this->input->post('id_pembayaran'),
                'nama_santri' => $this->input->post('nama_santri'),
                'bulan' => $this->input->post('bulan'),
                'spp' => $this->input->post('spp'),
                'uang_makan' => $this->input->post('uang_makan'),
                'keterangan' => 'Belum Lunas',
            ];
            $this->M_pembayaran->save($tambah);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong> Data Berhasil Ditambahkan.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>');
            redirect('pembayaran/index');
        }
    }

    public function edit($id)
    {
        $where = ['id_pembayaran' => $id];
        $data = [
            'pembayaran' => $this->M_pembayaran->detail($where)->row_array(),
            'santri' => $this->M_santri->getSantri()->result_array(),
        ];

        $this->load->view('templates/header');
        $this->load->view('pembayaran/v_edit', $data);
        $this->load->view('templates/footer');

        if (isset($_POST['simpan'])) {

            if(!empty($this->input->post('bulan'))) {
                $bulan = $this->input->post('bulan');
            } else {
                $bulan = $this->input->post('bulan_old');
            }

            $tambah = [
                'id_pembayaran' => $this->input->post('id_pembayaran'),
                'nama_santri' => $this->input->post('nama_santri'),
                'bulan' => $bulan,
                'spp' => $this->input->post('spp'),
                'uang_makan' => $this->input->post('uang_makan'),
                'keterangan' => $this->input->post('keterangan'),
            ];
            $this->M_pembayaran->edit($tambah, $where);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong> Data Berhasil Diubah.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>');
            redirect('pembayaran/index');
        }
    }

    public function hapus($id)
    {
        $where = ['id_pembayaran' => $id];
        $this->M_pembayaran->hapus($where);

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong> Data Berhasil Dihapus.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>');
        redirect('pembayaran/index');
    }
}