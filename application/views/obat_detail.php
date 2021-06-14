<div class="content">
    <div class="container-fluid">
        <h2>Detail Obat</h2>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <?php foreach ($obat as $o) ?>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?= base_url('assets'); ?> /foto_obat/<?= $o['foto']; ?>" class="rounded float-left" alt="..." width="300">
                            </div>
                            <div class="col-md-8">
                                <h2 class="card-title"><?= $o['merk_obat']; ?></h2>
                                <p class="card-text">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>Kode Obat</td>
                                            <td>:</td>
                                            <td><?= $o['kode_obat']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis</td>
                                            <td>:</td>
                                            <td><?= $o['jenis']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kegunaan</td>
                                            <td>:</td>
                                            <td><?= $o['kegunaan']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Harga</td>
                                            <td>:</td>
                                            <td>Rp. <?= number_format($o['harga'], 0, ',', '.'); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Stok tersedia</td>
                                            <td>:</td>
                                            <td><?= $o['stok']; ?></td>
                                        </tr>
                                    </thead>
                                </table>
                                </p>
                                <a href="<?= base_url('obat/update_obat/') . $o['id_obat']; ?>" class="btn btn-dark btn-fill">Edit</a>
                                <a href="<?= base_url('obat/'); ?>" class="btn btn-warning btn-fill">Kembali</a>
                                <button type="button" class="btn btn-success btn-fill" data-toggle="modal" data-target="#ModalStok">
                                    Tambah stok
                                </button>
                                <button type="button" class="btn btn-danger btn-fill" data-toggle="modal" data-target="#ModalStokKurang">
                                    Stok keluar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal tambah stok -->
<div class="modal fade" id="ModalStok" tabindex="-1" role="dialog" aria-labelledby="ModalStokLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalStokLabel">Tambah stok</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('obat/tambah_stok_aksi'); ?>" method="POST">
                <div class="modal-body">
                    <p>Tambah stok obat</p>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" required>
                            </div>
                            <div class="form-group">
                                <label>Total Stok Masuk</label>
                                <input type="number" class="form-control" name="qty" required>
                                <input type="hidden" class="form-control" name="id" value="<?= $o['id_obat']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-fill" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success btn-fill">Tambah Stok</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal kurang stok -->
<div class="modal fade" id="ModalStokKurang" tabindex="-1" role="dialog" aria-labelledby="ModalStokKurangLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalStokKurangLabel">Stok Keluar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('obat/kurang_stok_aksi'); ?>" method="POST">
                <div class="modal-body">
                    <p>stok obat keluar</p>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Keterangan</label>
                                <select class="form-control" name="ket">
                                    <option value="Penjualan">Penjualan</option>
                                    <option value="Retur">Retur</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" required>
                            </div>
                            <div class="form-group">
                                <label>Total Stok keluar</label>
                                <input type="number" class="form-control" name="qty" required>
                                <input type="hidden" class="form-control" name="id" value="<?= $o['id_obat']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-fill" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success btn-fill">Stok Keluar</button>
                </div>
            </form>
        </div>
    </div>
</div>