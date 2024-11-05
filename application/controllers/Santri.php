<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    class Santri extends CI_Controller {

        function __construct() {
            parent::__construct();
            $this->load->model('M_santri');
        }

        public function index() {
            $data['santri'] = $this->M_santri->getSantri()->result_array();
            
            foreach($data['santri'] as $santri)
            {
                $tahun_masuk = $santri['tahun_masuk'];
                $tahun_akhir = $santri['tahun_akhir'];
                $id_santri = $santri['id_santri'];
                
                if($tahun_masuk >= $tahun_akhir) {
                    $status = 'Tidak Aktif';
                    $this->db->update('tb_santri', array('status' => $status), array('id_santri' => $id_santri));
                } else {
                    $status = 'Aktif';
                    $this->db->update('tb_santri', array('status' => $status), array('id_santri' => $id_santri));
                }
            }

            $data['santri'] = $this->M_santri->getSantri()->result_array();

            $this->load->view('templates/header');
            $this->load->view('santri/v_tampil', $data);
            $this->load->view('templates/footer');
        }

        public function export() {
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

            $sheet->setCellValue('A1', "DATA SANTRI"); // Set kolom A1 dengan tulisan "DATA SISWA"
            $sheet->mergeCells('A1:E1'); // Set Merge Cell pada kolom A1 sampai E1
            $sheet->getStyle('A1')->getFont()->setBold(true); // Set bold kolom A1
            // Buat header tabel nya pada baris ke 3
            $sheet->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
            $sheet->setCellValue('B3', "NAMA SANTRI"); // Set kolom B3 dengan tulisan "NIS"
            $sheet->setCellValue('C3', "NO TELPON"); // Set kolom C3 dengan tulisan "NAMA"
            $sheet->setCellValue('D3', "TEMPAT TANGGAL LAHIR"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
            $sheet->setCellValue('E3', "ANAK KE"); // Set kolom E3 dengan tulisan "ALAMAT"
            $sheet->setCellValue('F3', "ALAMAT"); // Set kolom E3 dengan tulisan "ALAMAT"
            $sheet->setCellValue('G3', "ALAMAT"); // Set kolom E3 dengan tulisan "ALAMAT"
            $sheet->setCellValue('H3', "NAMA IBU"); // Set kolom E3 dengan tulisan "ALAMAT"
            $sheet->setCellValue('I3', "NAMA AYAH"); // Set kolom E3 dengan tulisan "ALAMAT"
            $sheet->setCellValue('J3', "NO.HP ORANG TUA"); // Set kolom E3 dengan tulisan "ALAMAT"
            $sheet->setCellValue('K3', "PENGHASILAN/BULAN"); // Set kolom E3 dengan tulisan "ALAMAT"
            $sheet->setCellValue('L3', "ALAMAT ORANG TUA"); // Set kolom E3 dengan tulisan "ALAMAT"
            // Apply style header yang telah kita buat tadi ke masing-masing kolom header
            $sheet->getStyle('A3')->applyFromArray($style_col);
            $sheet->getStyle('B3')->applyFromArray($style_col);
            $sheet->getStyle('C3')->applyFromArray($style_col);
            $sheet->getStyle('D3')->applyFromArray($style_col);
            $sheet->getStyle('E3')->applyFromArray($style_col);
            $sheet->getStyle('F3')->applyFromArray($style_col);
            $sheet->getStyle('G3')->applyFromArray($style_col);
            $sheet->getStyle('H3')->applyFromArray($style_col);
            $sheet->getStyle('I3')->applyFromArray($style_col);
            $sheet->getStyle('J3')->applyFromArray($style_col);
            $sheet->getStyle('K3')->applyFromArray($style_col);
            $sheet->getStyle('L3')->applyFromArray($style_col);

            $santri = $this->M_santri->getSantri()->result_array();

            $no = 1; // Untuk penomoran tabel, di awal set dengan 1
            $numrow = 4;

            foreach ($santri as $data) { // Lakukan looping pada variabel siswa
                $sheet->setCellValue('A' . $numrow, $no);
                $sheet->setCellValue('B' . $numrow, $data['nama']);
                $sheet->setCellValue('C' . $numrow, $data['no_hp']);
                $sheet->setCellValue('D' . $numrow, $data['ttl']);
                $sheet->setCellValue('E' . $numrow, $data['anak_ke']);
                $sheet->setCellValue('F' . $numrow, $data['alamat']);
                $sheet->setCellValue('G' . $numrow, $data['kelas']);
                $sheet->setCellValue('H' . $numrow, $data['nama_ibu']);
                $sheet->setCellValue('I' . $numrow, $data['nama_ayah']);
                $sheet->setCellValue('J' . $numrow, $data['no_hp_ortu']);
                $sheet->setCellValue('K' . $numrow, $data['penghasilan/bln']);
                $sheet->setCellValue('L' . $numrow, $data['alamat_ortu']);

                // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
                $sheet->getStyle('A' . $numrow)->applyFromArray($style_row);
                $sheet->getStyle('B' . $numrow)->applyFromArray($style_row);
                $sheet->getStyle('C' . $numrow)->applyFromArray($style_row);
                $sheet->getStyle('D' . $numrow)->applyFromArray($style_row);
                $sheet->getStyle('E' . $numrow)->applyFromArray($style_row);
                $sheet->getStyle('F' . $numrow)->applyFromArray($style_row);
                $sheet->getStyle('G' . $numrow)->applyFromArray($style_row);
                $sheet->getStyle('H' . $numrow)->applyFromArray($style_row);
                $sheet->getStyle('I' . $numrow)->applyFromArray($style_row);
                $sheet->getStyle('J' . $numrow)->applyFromArray($style_row);
                $sheet->getStyle('K' . $numrow)->applyFromArray($style_row);
                $sheet->getStyle('L' . $numrow)->applyFromArray($style_row);

                $no++; // Tambah 1 setiap kali looping
                $numrow++; // Tambah 1 setiap kali looping
            }

            $sheet->getColumnDimension('A')->setWidth(5); // Set width kolom A
            $sheet->getColumnDimension('B')->setWidth(15); // Set width kolom B
            $sheet->getColumnDimension('C')->setWidth(25); // Set width kolom C
            $sheet->getColumnDimension('D')->setWidth(20); // Set width kolom D
            $sheet->getColumnDimension('E')->setWidth(30); // Set width kolom E
            $sheet->getColumnDimension('F')->setWidth(30); // Set width kolom E
            $sheet->getColumnDimension('G')->setWidth(25); // Set width kolom E
            $sheet->getColumnDimension('H')->setWidth(25); // Set width kolom E
            $sheet->getColumnDimension('I')->setWidth(25); // Set width kolom E
            $sheet->getColumnDimension('J')->setWidth(25); // Set width kolom E
            $sheet->getColumnDimension('K')->setWidth(25); // Set width kolom E
            $sheet->getColumnDimension('L')->setWidth(25); // Set width kolom E

            $sheet->getDefaultRowDimension()->setRowHeight(-1);
            $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
            $sheet->setTitle("Data Santri");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment; filename="Data Santri.xlsx"'); // Set nama file excel nya
            header('Cache-Control: max-age=0');
            $writer = new Xlsx($spreadsheet);
            $writer->save('php://output');

        }

        public function add() {
            $this->load->view('templates/header');
            $this->load->view('santri/v_add');
            $this->load->view('templates/footer');

            if(isset($_POST['simpan'])) {
                $tahun_mulai = date('Y');
                $tahun_akhir = $tahun_mulai + 3;
                $tambah = [
                    'id_santri' => $this->input->post('id_santri'),
                    'nama' => $this->input->post('nama'),
                    'kelas' => $this->input->post('kelas'),
                    'ttl' => $this->input->post('ttl'),
                    'no_hp' => $this->input->post('no_hp'),
                    'alamat' => $this->input->post('alamat'),
                    'tahun_masuk' => $tahun_mulai,
                    'tahun_akhir' => $tahun_akhir,
                    'anak_ke' => $this->input->post('anak_ke'),
                    'status' => 'Aktif',
                    'nama_ibu' => $this->input->post('nama_ibu'),
                    'nama_ayah' => $this->input->post('nama_ayah'),
                    'alamat_ortu' => $this->input->post('alamat_ortu'),
                    'no_hp_ortu' => $this->input->post('no_hp_ortu'),
                    'penghasilan/bln' => $this->input->post('penghasilan/bln'),
                ];
                $this->M_santri->save($tambah);
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong> Data Berhasil Ditambahkan.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>');
                redirect('santri/index');
            }
        }

        public function edit($id) {
            $where = ['id_santri' => $id];
            $data['santri'] = $this->M_santri->detail($where)->row_array();

            $this->load->view('templates/header');
            $this->load->view('santri/v_edit', $data);
            $this->load->view('templates/footer');

            if(isset($_POST['simpan'])) {
                $tambah = [
                    'id_santri' => $this->input->post('id_santri'),
                    'nama' => $this->input->post('nama'),
                    'kelas' => $this->input->post('kelas'),
                    'ttl' => $this->input->post('ttl'),
                    'no_hp' => $this->input->post('no_hp'),
                    'alamat' => $this->input->post('alamat'),
                    'anak_ke' => $this->input->post('anak_ke'),
                    'status' => $this->input->post('status'),
                    'nama_ibu' => $this->input->post('nama_ibu'),
                    'nama_ayah' => $this->input->post('nama_ayah'),
                    'alamat_ortu' => $this->input->post('alamat_ortu'),
                    'no_hp_ortu' => $this->input->post('no_hp_ortu'),
                    'penghasilan/bln' => $this->input->post('penghasilan/bln'),
                ];
                $this->M_santri->edit($tambah, $where);
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong> Data Berhasil Diubah.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>');
                redirect('santri/index');
            }
        }

        public function detail($id) {
            $where = ['id_santri' => $id];
            $data['santri'] = $this->M_santri->detail($where)->row_array();

            $this->load->view('templates/header');
            $this->load->view('santri/v_detail', $data);
            $this->load->view('templates/footer');
        }

        public function hapus($id) {
            $where = ['id_santri' => $id];
            $this->M_santri->hapus($where);

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong> Data Berhasil Dihapus.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>');
            redirect('santri/index');
        }
    }

?>