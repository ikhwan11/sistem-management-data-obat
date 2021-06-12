<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update User</h4>
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
                            <a href="<?= base_url('user/'); ?>" class="btn btn-warning btn-fill pull-right">Kembali</a>
                            <button type="submit" class="btn btn-info btn-fill pull-right">Update User</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="card-image">
                        <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                    </div>
                    <div class="card-body">
                        <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="../assets/img/faces/face-3.jpg" alt="...">
                                <h5 class="title">nama user</h5>
                            </a>
                            <p class="description">
                                username
                            </p>
                        </div>
                        <p class="description text-center">
                            <button type="button" class="btn btn-primary btn-fill" data-toggle="modal" data-target="#exampleModal">
                                Update foto
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal update foto -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload File</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>foto harus jelas dengan format jpg dan png</p>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="file" class="form-control" name="foto" placeholder="tulis disini..">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-fill" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success btn-fill">Update foto</button>
            </div>
        </div>
    </div>
</div>