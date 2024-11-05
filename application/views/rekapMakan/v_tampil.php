<div class="content-wrapper">
    <div class="container">
        <div class="row mt-2">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= site_url('rekapMakan/cetak') ?>" method="post" target="_blank">
                            <div class="row">
                                <div class="col-6">
                                    <label>Bulan Mulai</label>
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="bln_start">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label>Bulan Akhir</label>
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="bln_end">
                                    </div>
                                </div>
                                
                                <div class="col-6">
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
                                        <button type="submit" name="search" class="btn btn-danger">Rekap Spp</button>
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