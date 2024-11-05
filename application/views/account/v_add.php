<div class="content-wrapper">
    <div class="container">
        <div class="row mt-2">
            <div class="col">
                <h3>Form Tambah User</h3>
                <div class="card mb-5">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="hidden" name="id">
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Roles</label>
                                <select name="role" class="form-control">
                                    <option>All</option>
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                        <a href="<?= site_url('account/index') ?>" class="btn btn-secondary">Batal</a>
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