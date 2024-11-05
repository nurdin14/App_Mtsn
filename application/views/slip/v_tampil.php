<div class="content-wrapper">
    <div class="container">
        <div class="row mt-2">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Cetak Slip</h3>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <th>No.</th>
                                <th>Nama Santri</th>
                                <th>Kelas</th>
                                <th>Status</th>
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
                                        <td><?= $s['status'] ?></td>
                                        <td>
                                            <a href="<?= site_url('slip/cetak/' . $s['id_santri']) ?>" target="blank"><i class='bx bx-printer text-danger' style="font-size: 18pt;"></i></a>
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