<div class="content-wrapper">
    <div class="container">
        <div class="row mt-2">
            <div class="col">
                <h3>Form Ubah Pengeluaran</h3>
                <div class="card mb-5">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-5">
                                    <label>Pengeluaran <span style="color: red;">*</span></label>
                                    <div class="form-group">
                                        <input type="hidden" name="id_kas_spp" value="<?= $pemasukan['id_kas_spp'] ?>">
                                        <input type="number" name="pengeluaran" class="form-control" value="<?= $pemasukan['pengeluaran'] ?>" required>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <label>Keterangan <span style="color: red;">*</span></label>
                                    <div class="form-group">
                                        <input type="text" name="ket" class="form-control" value="<?= $pemasukan['ket'] ?>" required>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <label>Tanggal <span style="color: red;">*</span></label>
                                    <div class="form-group">
                                        <input type="date" name="tgl" class="form-control" value="<?= $pemasukan['tgl'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                    <a href="<?= site_url('PengeluaranSpp/index') ?>" class="btn btn-danger">Batal</a>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>