<div class="content-wrapper">
    <div class="container">
        <div class="row mt-2">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <?= $this->session->flashdata('message'); ?>
                        <a href="<?= site_url('pengajar/add') ?>" class="btn text-white" style="background-color: #e84118">+ Tambah Pengajar</a>
                        <a href="<?= site_url('pengajar/export') ?>" class="btn btn-primary">Export Excel</a>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <th>No.</th>
                                <th>Nama Pengajar</th>
                                <th>Tempat Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Riwayat Pendidikan</th>
                                <th>Mapel</th>
                                <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($pengajar as $s) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $s['nama'] ?></td>
                                        <td><?= $s['ttl'] ?></td>
                                        <td><?= $s['alamat'] ?></td>
                                        <td><?= $s['riwayat_pendidikan'] ?></td>
                                        <td><?= $s['mapel'] ?></td>
                                        <td>
                                            <a href="<?= site_url('pengajar/hapus/' . $s['id_pengajar']) ?>" onclick="return confirm('apakah anda ingin menghapus?')"><i class='bx bx-trash text-danger' style="font-size: 18pt;"></i></a>
                                            <a href="<?= site_url('pengajar/edit/' . $s['id_pengajar']) ?>"><i class='bx bx-edit text-primary' style="font-size: 18pt;"></i></a>
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