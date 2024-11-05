<div class="content-wrapper">
    <div class="container">
        <div class="row mt-2">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <a href="<?= site_url('pembayaran/add') ?>" class="btn btn-danger">+ Tambah Tagihan</a>
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <th>No.</th>
                                <th>Nama Santri</th>
                                <th>Bulan</th>
                                <th>SPP</th>
                                <th>Uang Makan</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no = 1;
                                    foreach ($pembayaran as $s) : 
                                    $tanggl = $s['bulan'];
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
                                        <td><?= $s['nama_santri'] ?></td>
                                        <td><?= $formattedDate ?></td>
                                        <td>Rp. <?= number_format($s['spp'],0,',',',') ?></td>
                                        <td>Rp. <?= number_format($s['uang_makan'], 0, ',', ',') ?></td>
                                        <td><?= $s['keterangan'] ?></td>
                                        <td>
                                            <a href="<?= site_url('pembayaran/hapus/' . $s['id_pembayaran']) ?>" onclick="return confirm('apakah anda ingin menghapus?')"><i class='bx bx-trash text-danger' style="font-size: 18pt;"></i></a>
                                            <a href="<?= site_url('pembayaran/edit/' . $s['id_pembayaran']) ?>"><i class='bx bx-edit text-primary' style="font-size: 18pt;"></i></a>
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