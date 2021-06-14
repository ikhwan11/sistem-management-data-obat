<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update User</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?= base_url('user/update_user_aksi'); ?>" enctype="multipart/form-data">
                            <?php foreach ($user as $u) : ?>
                                <div class="row">
                                    <div class="col-md-5 pr-1">
                                        <div class="form-group">
                                            <label>Nama Depan</label>
                                            <input type="text" class="form-control" placeholder="tulis disini.." autofocus name="nama_d" value="<?= $u['nama_depan']; ?>">
                                            <input type="hidden" class="form-control" placeholder="tulis disini.." name="id" value="<?= $u['id_user']; ?>">
                                            <?php echo form_error('nama_d', '<span class=" text-small text-danger">', '</span>') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-5 pl-1">
                                        <div class="form-group">
                                            <label>Nama Belakang</label>
                                            <input type="text" class="form-control" placeholder="tulis disini.." name="nama_b" value="<?= $u['nama_belakang']; ?>">
                                            <?php echo form_error('nama_b', '<span class=" text-small text-danger">', '</span>') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-2 pl-1">
                                        <div class="form-group">
                                            <label>jabatan</label>
                                            <select name="jk" class="form-control">
                                                <option value="<?= $u['jenis_kelamin']; ?>"><?= $u['jenis_kelamin']; ?></option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            <?php echo form_error('jk', '<span class=" text-small text-danger">', '</span>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>Alamat Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="tulis disini.." value="<?= $u['email']; ?>">
                                            <?php echo form_error('email', '<span class=" text-small text-danger">', '</span>') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>No hp</label>
                                            <input type="number" name="no_hp" class="form-control" placeholder="tulis disini.." value="<?= $u['no_hp']; ?>">
                                            <?php echo form_error('no_hp', '<span class=" text-small text-danger">', '</span>') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" name="alamat" class="form-control" placeholder="tulis disini.." value="<?= $u['alamat']; ?>">
                                            <?php echo form_error('alamat', '<span class=" text-small text-danger">', '</span>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Kecamatan</label>
                                            <input type="text" name="kec" class="form-control" placeholder="tulis disini.." value="<?= $u['kecamatan']; ?>">
                                            <?php echo form_error('kec', '<span class=" text-small text-danger">', '</span>') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4 px-1">
                                        <div class="form-group">
                                            <label>Kota/kabupaten</label>
                                            <input type="text" name="kota" class="form-control" placeholder="tulis disini.." value="<?= $u['kota']; ?>">
                                            <?php echo form_error('kota', '<span class=" text-small text-danger">', '</span>') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label>jabatan</label>
                                            <select name="jabatan" class="form-control">
                                                <option value="<?= $u['jabatan']; ?>"><?= $u['jabatan']; ?></option>
                                                <option value="Manager">Manager</option>
                                                <option value="Admin">Admin</option>
                                                <option value="kasir">kasir</option>
                                            </select>
                                            <?php echo form_error('jabatan', '<span class=" text-small text-danger">', '</span>') ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?= base_url('user/'); ?>" class="btn btn-warning btn-fill pull-right">Kembali</a>
                                <button type="submit" class="btn btn-info btn-fill pull-right">Update User</button>
                                <div class="clearfix"></div>
                            <?php endforeach; ?>
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
                                <img class="avatar border-gray" src="<?= base_url('assets'); ?> /foto_user/<?= $u['foto']; ?>" alt="...">
                                <h5 class="title"><?= $u['nama_depan']; ?> <?= $u['nama_belakang']; ?></h5>
                            </a>
                            <p class="description">
                                <?= $u['username']; ?>
                            </p>
                        </div>
                        <p class="description text-center">
                            <button type="button" class="btn btn-primary btn-fill" data-toggle="modal" data-target="#exampleModal">
                                Update foto
                            </button>
                            <button type="button" class="btn btn-warning btn-fill" data-toggle="modal" data-target="#ModalData">
                                Update Data Access
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
            <form action="<?= base_url('user/update_foto'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <p>foto harus jelas dengan format jpg dan png</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="file" class="form-control" name="foto" placeholder="tulis disini..">
                                <input type="hidden" class="form-control" name="id" value="<?= $u['id_user']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-fill" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success btn-fill">Update foto</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal update password -->
<div class="modal fade" id="ModalData" tabindex="-1" role="dialog" aria-labelledby="ModalDataLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalDataLabel">Upload File</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('user/update_data_akses'); ?>" method="POST">
                <div class="modal-body">
                    <p>foto harus jelas dengan format jpg dan png</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Username baru</label>
                                <input type="text" class="form-control" name="username" placeholder="tulis disini.." value="<?= $u['username']; ?>">
                                <input type="hidden" class="form-control" name="id" value="<?= $u['id_user']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password baru</label>
                                <input type="password" class="form-control" name="password" placeholder="tulis disini..">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-fill" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success btn-fill">Update Data Access</button>
                </div>
            </form>
        </div>
    </div>
</div>