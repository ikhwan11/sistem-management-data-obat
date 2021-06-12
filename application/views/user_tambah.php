<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah User</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Nama Depan</label>
                                        <input type="text" class="form-control" placeholder="tulis disini.." autofocus name="nama_d">
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Nama Belakang</label>
                                        <input type="text" class="form-control" placeholder="tulis disini.." name="nama_b">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Alamat Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="tulis disini..">
                                    </div>
                                </div>
                                <div class="col-md-3 px-1">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control" placeholder="tulis disini..">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="tulis disini.." name="password">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>No hp</label>
                                        <input type="number" name="no_hp" class="form-control" placeholder="tulis disini..">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" class="form-control" placeholder="tulis disini..">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <input type="text" name="kec" class="form-control" placeholder="tulis disini..">
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Kota/kabupaten</label>
                                        <input type="text" name="kota" class="form-control" placeholder="tulis disini..">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>jabatan</label>
                                        <select name="jabatan" class="form-control">
                                            <option value="Manager">Manager</option>
                                            <option value="Admin">Admin</option>
                                            <option value="kasir">kasir</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Foto</label>
                                        <input type="file" name="foto" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <a href="<?= base_url('user/'); ?>" class="btn btn-warning btn-fill pull-right">Kembali</a>
                            <button type="submit" class="btn btn-info btn-fill pull-right">Tambah User</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>