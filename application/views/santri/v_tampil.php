<div class="content-wrapper">
    <div class="container">
        <div class="row mt-2">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <?= $this->session->flashdata('message'); ?>
                        <a href="<?= site_url('santri/add') ?>" class="btn text-white" style="background-color: #e84118">+ Tambah Santri</a>
                        <a href="<?= site_url('santri/export') ?>" class="btn btn-primary ext-white">Export Excel</a>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <th>No.</th>
                                <th>Nama Santri</th>
                                <th>Kelas</th>
                                <th>Alamat</th>
                                <th>Status Santri</th>
                                <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($santri as $s) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $s['nama'] ?></td>
                                        <td><?= $s['kelas'] ?></td>
                                        <td><?= $s['alamat'] ?></td>
                                        <td>
                                            <?php
                                            if ($s['tahun_masuk'] >= $s['tahun_akhir'] && $s['status'] !== 'Aktif') {
                                                echo '<span class="btn btn-sm btn-danger">' . $s['status'] . '</span>';
                                            } else {
                                                echo '<span class="btn btn-sm btn-success">' . $s['status'] . '</span>';
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <a href="<?= site_url('santri/detail/' . $s['id_santri']) ?>"><i class='bx bx-detail text-info' style="font-size: 18pt;"></i> </a>
                                                    <a href="<?= site_url('santri/hapus/' . $s['id_santri']) ?>" onclick="return confirm('apakah anda ingin menghapus?')"><i class='bx bx-trash text-danger' style="font-size: 18pt;"></i></a>
                                                    <a href="<?= site_url('santri/edit/' . $s['id_santri']) ?>"><i class='bx bx-edit text-primary' style="font-size: 18pt;"></i></a>
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