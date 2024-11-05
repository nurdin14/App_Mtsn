<div class="content-wrapper">
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= site_url('RekapKasMakan/cetak') ?>" method="post" target="_blank">
                            <div class="row">
                                <div class="col-6">
                                    <label>Tanggal Mulai</label>
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="tgl_start">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label>Tanggal Akhir</label>
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="tgl_end">
                                    </div>
                                </div>
                                <div class="col">
                                    <label for=""></label>
                                    <div class="form-group">
                                        <button type="submit" name="search" class="btn btn-danger">Rekap Kas</button>
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