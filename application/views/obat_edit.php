<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update Data Obat</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Kode Obat</label>
                                        <input type="text" class="form-control" placeholder="tulis disini.." autofocus name="kode">
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Merk Obat</label>
                                        <input type="text" class="form-control" placeholder="tulis disini.." name="merk" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Kegunaan</label>
                                        <input type="text" name="kegunaan" class="form-control" placeholder="tulis disini..">
                                    </div>
                                </div>
                                <div class="col-md-3 px-1">
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input type="number" name="harga" class="form-control" placeholder="tulis disini..">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Jenis</label>
                                        <select name="jenis" class="form-control">
                                            <option value="Obat Bebas">Obat Bebas</option>
                                            <option value="Obat Terbatas">Obat Terbatas</option>
                                            <option value="Obat Narkotika">Obat Narkotika</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <input type="file" name="gambar" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-success btn sm btn-fill mr-2" data-toggle="modal" data-target="#ModalStok">
                                Tambah stok
                            </button>
                            <span><small class="text-warning">*klik tombol untuk menambah stok obat</small></span>
                            <a href="<?= base_url('obat/'); ?>" class="btn btn-warning btn-fill pull-right">Kembali</a>
                            <button type="submit" class="btn btn-info btn-fill pull-right">Update Obat</button>
                            <div class="clearfix"></div>
                        </form>
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
            <form action="" method="POST">
                <div class="modal-body">
                    <p>Total Stok masuk:</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="number" class="form-control" name="foto" placeholder="tulis disini..">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-fill" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success btn-fill">Update Stok</button>
                </div>
            </form>
        </div>
    </div>
</div>