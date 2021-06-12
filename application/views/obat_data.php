<div class="content">
    <div class="container-fluid">
        <h2>Data Obat</h2>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Kode Obat</th>
                                <th>Jenis</th>
                                <th>Merk Obat</th>
                                <th>Kegunaan</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <button type="button" class="btn btn-secondary btn sm btn-fill mr-2" data-toggle="modal" data-target="#ModalGambar">
                                            <img src="<?= base_url('assets'); ?> /img/test_obat.jpg" class="rounded float-left" alt="..." width="30">
                                        </button>
                                    </td>
                                    <td>C00AU67</td>
                                    <td>Obat Bebas</td>
                                    <td>Kocilin hanin</td>
                                    <td>Sakit perut</td>
                                    <td>Rp.75.000</td>
                                    <td>115</td>
                                    <td class="center">
                                        <button type="button" class="btn btn-success btn sm btn-fill mr-2" data-toggle="modal" data-target="#ModalStok">
                                            Tambah stok
                                        </button>
                                        <a href="<?= base_url('obat/update_obat'); ?>" class="btn btn-dark btn-fill mr-2">Edit</a>
                                        <a href="#" class="btn btn-danger btn-fill">Hapus</a>
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

<!-- modal update stok -->
<div class="modal fade" id="ModalStok" tabindex="-1" role="dialog" aria-labelledby="ModalStokLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalStokLabel">Tambah stok obat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Total Stok masuk:</p>
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="number" class="form-control" name="foto" placeholder="tulis disini..">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-fill" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success btn-fill">Update Stok</button>
            </div>
        </div>
    </div>
</div>

<!-- modal gambar -->
<div class="modal fade" id="ModalGambar" tabindex="-1" role="dialog" aria-labelledby="ModalGambarLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalGambarLabel">Detail Gambar Obat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="<?= base_url('assets'); ?> /img/test_obat.jpg" class="img-fluid" alt="Responsive image">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-fill" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>