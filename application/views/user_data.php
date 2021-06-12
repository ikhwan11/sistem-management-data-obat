<div class="content">
    <div class="container-fluid">
        <h2>User menu</h2>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title"><a href="<?= base_url('user/tambah_user'); ?>" class="btn btn-success btn-fill">Tambah User</a></h4>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis kelamin</th>
                                <th>Jabatan</th>
                                <th>aksi</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Doremi</td>
                                    <td>Perempuan</td>
                                    <td>Admin</td>
                                    <td>
                                        <a href="<?= base_url('user/update_user'); ?>" class="btn btn-dark btn-sm btn-fill mr-2">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm btn-fill">Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>