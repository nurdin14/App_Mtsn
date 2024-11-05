<div class="content-wrapper">
    <div class="container">
        <div class="row mt-2">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <?= $this->session->flashdata('message'); ?>
                        <button type="button" class="btn text-white" style="background-color: #e84118" onclick="window.location.href='<?= site_url('account/add') ?>'">+ Tambah User</button>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <th>No.</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Roles</th>
                                <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($account as $s) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $s['username'] ?></td>
                                        <td><?= $s['password'] ?></td>
                                        <td><?= $s['role'] ?></td>
                                        <td>
                                            <a href="<?= site_url('account/hapus/' . $s['id']) ?>" onclick="return confirm('apakah anda ingin menghapus?')"><i class='bx bx-trash text-danger' style="font-size: 18pt;"></i></a>
                                            <a href="<?= site_url('account/edit/' . $s['id']) ?>"><i class='bx bx-edit text-primary' style="font-size: 18pt;"></i></a>
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