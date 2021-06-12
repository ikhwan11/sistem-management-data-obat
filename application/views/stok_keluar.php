<div class="content">
    <div class="container-fluid">
        <h2>Data Obat</h2>
        <div class="row">
            <div class="col-md-4">
                <span><small class="text-warning">* Cari berdasarkan merek dan kode obat</small></span>
                <form action="" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="keyword" autocomplete="off" autofocus>
                        <div class="input-group-append">
                            <input class="btn btn-primary btn-fill" type="submit" name="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
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
                                        <button type="button" class="btn btn-danger btn sm btn-fill mr-2" data-toggle="modal" data-target="#ModalStokKeluar">
                                            Input stok keluar
                                        </button>
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
<div class="modal fade" id="ModalStokKeluar" tabindex="-1" role="dialog" aria-labelledby="ModalStokKeluarLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalStokKeluarLabel">Stok obat keluar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Keterangan</label>
                                <select class="form-control" name="ket" placeholder="tulis disini..">
                                    <option value="Retur">Retur</option>
                                    <option value="Terjual">Terjual</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Total</label>
                                <input type="number" class="form-control" name="stok_keluar" placeholder="tulis disini..">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-fill" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger btn-fill">Update Stok</button>
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