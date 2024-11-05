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
                                        <input type="text" name="nama_santri" class="form-control bg-secondary text-white" value="<?= $pembayaran['nama_santri'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label>SPP <span style="color: red;">*</span></label>
                                    <div class="form-group">
                                        <input type="number" name="spp" class="form-control bg-secondary text-white" value="<?= $pembayaran['spp'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label>Uang Makan <span style="color: red;">*</span></label>
                                    <div class="form-group">
                                        <input type="number" name="uang_makan" class="form-control bg-secondary text-white" value="<?= $pembayaran['uang_makan'] ?>" readonly>
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