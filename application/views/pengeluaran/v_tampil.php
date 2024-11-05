<div class="content-wrapper">
    <div class="container">
        <div class="row mt-2">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <a href="<?= site_url('pengeluaran/add') ?>" class="btn btn-danger">+ Tambah Pengeluaran</a>
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <th>No.</th>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Pengeluaran</th>
                                <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($pemasukan as $s) :
                                    $tanggl = $s['tgl'];
                                    $dateObject = new DateTime($tanggl);
                                    $months = [
                                        1 => 'Januari',
                                        2 => 'Februari',
                                        3 => 'Maret',
                                        4 => 'April',
                                        5 => 'Mei',
                                        6 => 'Juni',
                                        7 => 'Juli',
                                        8 => 'Agustus',
                                        9 => 'September',
                                        10 => 'Oktober',
                                        11 => 'November',
                                        12 => 'Desember'
                                    ];


                                    $monthNumber = $dateObject->format('n');

                                    $monthName = $months[$monthNumber];

                                    $year = $dateObject->format('Y');

                                    $formattedDate = $monthName . ' ' . $year;
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $s['tgl'] . '(' . $formattedDate . ')' ?></td>
                                        <td><?= $s['ket'] ?></td>
                                        <td>Rp. <?= number_format($s['pengeluaran'], 0, ',', ',') ?></td>
                                        <td>
                                            <a href="<?= site_url('pengeluaran/hapus/' . $s['id_kas']) ?>" onclick="return confirm('apakah anda ingin menghapus?')"><i class='bx bx-trash text-danger' style="font-size: 18pt;"></i></a>
                                            <a href="<?= site_url('pengeluaran/edit/' . $s['id_kas']) ?>"><i class='bx bx-edit text-primary' style="font-size: 18pt;"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>