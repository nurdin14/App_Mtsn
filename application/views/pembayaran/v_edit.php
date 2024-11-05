<div class="content-wrapper">
    <div class="container">
        <div class="row mt-2">
            <div class="col">
                <h3>Form Ubah Tagihan</h3>
                <div class="card mb-5">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-4">
                                    <label>Nama Santri <span style="color: red;">*</span></label>
                                    <div class="form-group">
                                        <input type="hidden" name="id_pembayaran" value="<?= $pembayaran['id_pembayaran'] ?>">
                                        <select name="nama_santri" class="form-control">
                                            <option value="<?= $pembayaran['nama_santri'] ?>"><?= $pembayaran['nama_santri'] ?></option>
                                            <option>All</option>
                                            <?php foreach ($santri as $s) : ?>
                                                <option value="<?= $s['nama'] ?>"><?= $s['nama'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label>Tanggal <span style="color: red;">*</span></label>
                                    <div class="form-group">
                                        <input type="date" name="bulan" class="form-control" value="<?= $pembayaran['bulan'] ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label>SPP <span style="color: red;">*</span></label>
                                    <div class="form-group">
                                        <input type="number" name="spp" class="form-control" value="<?= $pembayaran['spp'] ?>" required>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label>Uang Makan <span style="color: red;">*</span></label>
                                    <div class="form-group">
                                        <input type="number" name="uang_makan" class="form-control" value="<?= $pembayaran['uang_makan'] ?>" required>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label>Keterangan <span style="color: red;">*</span></label>
                                    <div class="form-group">
                                        <select name="keterangan" class="form-control">
                                            <option selected value="<?= $pembayaran['keterangan'] ?>"><?= $pembayaran['keterangan'] ?></option>
                                            <option>All</option>
                                            <option value="Belum Lunas">Belum Lunas</option>
                                            <option value="Lunas">Lunas</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <label>Bulan <span style="color: red;">*</span></label>
                                    <div class="form-group">
                                        <input type="text" name="bulan_old" class="form-control bg-secondary text-white" value="<?= $pembayaran['bulan'] ?>" readonly>
                                    </div>
                                </div>

                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                    <a href="<?= site_url('pembayaran/index') ?>" class="btn btn-danger">Batal</a>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>