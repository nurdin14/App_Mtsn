<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Pengajar extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pengajar');
    }

    public function export()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $style_col = [
            'font' => ['bold' => true], // Set font nya jadi bold
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ],
            'borders' => [
                'top' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border top dengan garis tipis
                'right' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],  // Set border right dengan garis tipis
                'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border bottom dengan garis tipis
                'left' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN] // Set border left dengan garis tipis
            ]
        ];
        // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
        $style_row = [
            'alignment' => [
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ],
            'borders' => [
                'top' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border top dengan garis tipis
                'right' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],  // Set border right dengan garis tipis
                'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border bottom dengan garis tipis
                'left' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN] // Set border left dengan garis tipis
            ]
        ];

        $sheet->setCellValue('A1', "DATA PENGAJAR"); // Set kolom A1 dengan tulisan "DATA SISWA"
        $sheet->mergeCells('A1:E1'); // Set Merge Cell pada kolom A1 sampai E1
        $sheet->getStyle('A1')->getFont()->setBold(true); // Set bold kolom A1
        // Buat header tabel nya pada baris ke 3
        $sheet->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
        $sheet->setCellValue('B3', "NAMA PENGAJAR"); // Set kolom B3 dengan tulisan "NIS"
        $sheet->setCellValue('C3', "TEMPAT TANGGAL LAHIR"); // Set kolom C3 dengan tulisan "NAMA"
        $sheet->setCellValue('D3', "ALAMAT"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
        $sheet->setCellValue('E3', "RIWAYAT PENDIDIKAN"); // Set kolom E3 dengan tulisan "ALAMAT"
        $sheet->setCellValue('F3', "MAPEL"); // Set kolom E3 dengan tulisan "ALAMAT"
        // Apply style header yang telah kita buat tadi ke masing-masing kolom header
        $sheet->getStyle('A3')->applyFromArray($style_col);
        $sheet->getStyle('B3')->applyFromArray($style_col);
        $sheet->getStyle('C3')->applyFromArray($style_col);
        $sheet->getStyle('D3')->applyFromArray($style_col);
        $sheet->getStyle('E3')->applyFromArray($style_col);
        $sheet->getStyle('F3')->applyFromArray($style_col);

        $pengajar = $this->M_pengajar->getPengajar()->result_array();

        $no = 1; // Untuk penomoran tabel, di awal set dengan 1
        $numrow = 4;

        foreach ($pengajar as $data) { // Lakukan looping pada variabel siswa
            $sheet->setCellValue('A' . $numrow, $no);
            $sheet->setCellValue('B' . $numrow, $data['nama']);
            $sheet->setCellValue('C' . $numrow, $data['ttl']);
            $sheet->setCellValue('D' . $numrow, $data['alamat']);
            $sheet->setCellValue('E' . $numrow, $data['riwayat_pendidikan']);
            $sheet->setCellValue('F' . $numrow, $data['mapel']);

            // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
            $sheet->getStyle('A' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('B' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('C' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('D' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('E' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('F' . $numrow)->applyFromArray($style_row);

            $no++; // Tambah 1 setiap kali looping
            $numrow++; // Tambah 1 setiap kali looping
        }

        $sheet->getColumnDimension('A')->setWidth(5); // Set width kolom A
        $sheet->getColumnDimension('B')->setWidth(15); // Set width kolom B
        $sheet->getColumnDimension('C')->setWidth(25); // Set width kolom C
        $sheet->getColumnDimension('D')->setWidth(20); // Set width kolom D
        $sheet->getColumnDimension('E')->setWidth(30); // Set width kolom E
        $sheet->getColumnDimension('F')->setWidth(30); // Set width kolom E

        $sheet->getDefaultRowDimension()->setRowHeight(-1);
        $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
        $sheet->setTitle("Data Pengajar");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Pengajar.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
    }

    public function index()
    {
        $data['pengajar'] = $this->M_pengajar->getPengajar()->result_array();

        $this->load->view('templates/header');
        $this->load->view('pengajar/v_tampil', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $this->load->view('templates/header');
        $this->load->view('pengajar/v_add');
        $this->load->view('templates/footer');

        if (isset($_POST['simpan'])) {
            $tambah = [
                'id_pengajar' => $this->input->post('id_pengajar'),
                'nama' => $this->input->post('nama'),
                'ttl' => $this->input->post('ttl'),
                'alamat' => $this->input->post('alamat'),
                'riwayat_pendidikan' => $this->input->post('riwayat_pendidikan'),
                'mapel' => $this->input->post('mapel'),
            ];
            $this->M_pengajar->save($tambah);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong> Data Berhasil Ditambahkan.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>');
            redirect('pengajar/index');
        }
    }

    public function edit($id)
    {
        $where = ['id_pengajar' => $id];
        $data['pengajar'] = $this->M_pengajar->detail($where)->row_array();

        $this->load->view('templates/header');
        $this->load->view('pengajar/v_edit', $data);
        $this->load->view('templates/footer');

        if (isset($_POST['simpan'])) {
            $tambah = [
                'id_pengajar' => $this->input->post('id_pengajar'),
                'nama' => $this->input->post('nama'),
                'ttl' => $this->input->post('ttl'),
                'alamat' => $this->input->post('alamat'),
                'riwayat_pendidikan' => $this->input->post('riwayat_pendidikan'),
                'mapel' => $this->input->post('mapel'),
            ];
            $this->M_pengajar->edit($tambah, $where);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong> Data Berhasil Diubah.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>');
            redirect('pengajar/index');
        }
    }

    public function hapus($id)
    {
        $where = ['id_pengajar' => $id];
        $this->M_pengajar->hapus($where);

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong> Data Berhasil Dihapus.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>');
        redirect('pengajar/index');
    }
}