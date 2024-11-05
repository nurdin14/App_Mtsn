<div class="content-wrapper">
    <div class="container">
        <div class="row mt-2">
            <div class="col">
                <h3>Form Ubah Pengurus</h3>
                <div class="card mb-5">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-3">
                                    <label>Nama Pengurus <span style="color: red;">*</span></label>
                                    <div class="form-group">
                                        <input type="hidden" name="id_pengurus" value="<?= $pengurus['id_pengurus'] ?>">
                                        <input type="text" name="nama" class="form-control" value="<?= $pengurus['nama'] ?>" required>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label>Tempat Tanggal Lahir <span style="color: red;">*</span></label>
                                    <div class="form-group">
                                        <input type="text" name="ttl" class="form-control" value="<?= $pengurus['ttl'] ?>" required>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label>Jabatan <span style="color: red;">*</span></label>
                                    <div class="form-group">
                                        <input type="text" name="jabatan" class="form-control" value="<?= $pengurus['jabatan'] ?>" required>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label> Riwayat Pendidikan <span style="color: red;">*</span></label>
                                    <div class="form-group">
                                        <select name="riwayat_pendidikan" class="form-control" required>
                                            <option value="<?= $pengurus['riwayat_pendidikan'] ?>"><?= $pengurus['riwayat_pendidikan'] ?></option>
                                            <option>All</option>
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
                                            <option value="D3">D3</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <label>Alamat <span style="color: red;">*</span></label>
                                    <div class="form-group">
                                        <textarea name="alamat" class="form-control" required><?= $pengurus['alamat'] ?></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                    <a href="<?= site_url('pengurus/index') ?>" class="btn btn-danger">Batal</a>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>