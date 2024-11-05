<div class="content-wrapper">
    <div class="container">
        <div class="row mt-2">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <?= $this->session->flashdata('message'); ?>
                        <a href="<?= site_url('pengurus/add') ?>" class="btn text-white" style="background-color: #e84118">+ Tambah Pengurus</a>
                        <a href="<?= site_url('pengurus/export') ?>" class="btn btn-primary">Export Excel</a>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <th>No.</th>
                                <th>Nama Pengurus</th>
                                <th>Tempat Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Riwayat Pendidikan</th>
                                <th>jabatan</th>
                                <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($pengurus as $s) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $s['nama'] ?></td>
                                        <td><?= $s['ttl'] ?></td>
                                        <td><?= $s['alamat'] ?></td>
                                        <td><?= $s['riwayat_pendidikan'] ?></td>
                                        <td><?= $s['jabatan'] ?></td>
                                        <td>
                                            <a href="<?= site_url('pengurus/hapus/' . $s['id_pengurus']) ?>" onclick="return confirm('apakah anda ingin menghapus?')"><i class='bx bx-trash text-danger' style="font-size: 18pt;"></i></a>
                                            <a href="<?= site_url('pengurus/edit/' . $s['id_pengurus']) ?>"><i class='bx bx-edit text-primary' style="font-size: 18pt;"></i></a>
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