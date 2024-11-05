<div class="content-wrapper">
    <div class="container">
        <div class="row mt-2">
            <div class="col">
                <h3>Form Tambah Santri</h3>
                <div class="card mb-5">
                    <div class="card-header">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Data Santri</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Data Orang Tua</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="row">
                                        <div class="col-3">
                                            <label>Nama Santri <span style="color: red;">*</span></label>
                                            <div class="form-group">
                                                <input type="hidden" name="id_santri">
                                                <input type="text" name="nama" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label>Tempat Tanggal Lahir <span style="color: red;">*</span></label>
                                            <div class="form-group">
                                                <input type="text" name="ttl" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label>Kelas <span style="color: red;">*</span></label>
                                            <div class="form-group">
                                                <input type="text" name="kelas" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label>Anak Ke <span style="color: red;">*</span></label>
                                            <div class="form-group">
                                                <input type="number" name="anak_ke" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label>No. Handphone <span style="color: red;">*</span></label>
                                            <div class="form-group">
                                                <input type="tel" name="no_hp" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <label>Alamat <span style="color: red;">*</span></label>
                                            <div class="form-group">
                                                <textarea name="alamat" class="form-control" required></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="row">
                                        <div class="col-3">
                                            <label>Nama Ibu <span style="color: red;">*</span></label>
                                            <div class="form-group">
                                                <input type="text" name="nama_ibu" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label>Nama Ayah <span style="color: red;">*</span></label>
                                            <div class="form-group">
                                                <input type="text" name="nama_ayah" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label>No. Handphone <span style="color: red;">*</span></label>
                                            <div class="form-group">
                                                <input type="tel" name="no_hp_ortu" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label>Penghasilan/Bulan <span style="color: red;">*</span></label>
                                            <div class="form-group">
                                                <input type="number" name="penghasilan/bln" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <label>Alamat <span style="color: red;">*</span></label>
                                            <div class="form-group">
                                                <textarea name="alamat_ortu" class="form-control" required></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                        <a href="<?= site_url('santri/index') ?>" class="btn btn-secondary">Batal</a>
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