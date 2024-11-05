<div class="content-wrapper">
    <div class="container">
        <div class="row mt-2">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Detail Santri</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="title">Data Santri</h5>
                                <table cellspacing="3" cellpadding="3">
                                    <tr>
                                        <td>Nama Santri</td>
                                        <td>:</td>
                                        <td><?= $santri['nama'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kelas</td>
                                        <td>:</td>
                                        <td><?= $santri['kelas'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>No. Handphone</td>
                                        <td>:</td>
                                        <td><?= $santri['no_hp'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tempat Tanggal Lahir</td>
                                        <td>:</td>
                                        <td><?= $santri['ttl'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Anak Ke</td>
                                        <td>:</td>
                                        <td><?= $santri['anak_ke'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td><?= $santri['alamat'] ?></td>
                                    </tr>
                                </table>
                                <a href="<?= site_url('santri/index') ?>" class="btn btn-danger">Kembali</a>
                            </div>
                            <div class="col-6">
                                <h5 class="title">Data Orang Tua</h5>
                                <table cellspacing="3" cellpadding="3">
                                    <tr>
                                        <td>Nama Ibu</td>
                                        <td>:</td>
                                        <td><?= $santri['nama_ibu'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Ayah</td>
                                        <td>:</td>
                                        <td><?= $santri['nama_ayah'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>No.Handphone Orang Tua</td>
                                        <td>:</td>
                                        <td><?= $santri['no_hp_ortu'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Penghasilan/Bulan</td>
                                        <td>:</td>
                                        <td>Rp. <?= number_format($santri['penghasilan/bln'], 0, ',', ',') ?></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Orang Tua</td>
                                        <td>:</td>
                                        <td><?= $santri['alamat_ortu'] ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>