<div class="content-wrapper">
    <div class="container">
        <div class="row mt-2">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= site_url('bayar/index') ?>" method="post">
                            <div class="row">
                                <div class="col-3">
                                    <label>Nama Santri</label>
                                    <div class="form-group">
                                        <input type="text" name="nama_santri" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label>Bulan</label>
                                    <div class="form-group">
                                        <select name="bulan" class="form-control">
                                            <option value="All">All</option>
                                            <option value="01">Januari</option>
                                            <option value="02">Februari</option>
                                            <option value="03">Maret</option>
                                            <option value="04">April</option>
                                            <option value="05">Mei</option>
                                            <option value="06">Juni</option>
                                            <option value="07">Juli</option>
                                            <option value="08">Agustus</option>
                                            <option value="09">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label>Tahun</label>
                                    <div class="form-group">
                                        <select name="tahun" class="form-control">
                                            <option value="All">All</option>
                                            <?php
                                            $tahun_1 = 2023;
                                            $tahun = date('Y');

                                            for ($tahun_1; $tahun_1 <= $tahun; $tahun_1++) { ?>
                                                <option value="<?= $tahun_1; ?>"><?= $tahun_1; ?></option>
                                            <?php } ?>
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label>Keterangan <span style="color: red;">*</span></label>
                                    <div class="form-group">
                                        <select name="keterangan" class="form-control">
                                            <option value="All">All</option>
                                            <option value="Belum Lunas">Belum Lunas</option>
                                            <option value="Lunas">Lunas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for=""></label>
                                    <div class="form-group">
                                        <button type="submit" name="search" class="btn btn-danger">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <th>No.</th>
                                <th>Nama Santri</th>
                                <th>Tanggal</th>
                                <th>SPP</th>
                                <th>Uang Makan</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($pembayaran as $s) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $s['nama_santri'] ?></td>
                                        <td><?= $s['bulan'] ?></td>
                                        <td>Rp. <?= number_format($s['spp'], 0, ',', ',') ?></td>
                                        <td>Rp. <?= number_format($s['uang_makan'], 0, ',', ',') ?></td>
                                        <td><?= $s['keterangan'] ?></td>
                                        <td>
                                            <a href="<?= site_url('bayar/edit/' . $s['id_pembayaran']) ?>"><i class='bx bx-edit text-primary' style="font-size: 18pt;"></i></a>
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