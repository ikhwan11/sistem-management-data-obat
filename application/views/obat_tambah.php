<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Data Obat</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?= base_url('obat_tambah/tambah_obat_aksi'); ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Kode Obat</label>
                                        <input type="text" class="form-control" placeholder="tulis disini.." autofocus name="kode">
                                        <?php echo form_error('kode', '<span class=" text-small text-danger">', '</span>') ?>
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Merk Obat</label>
                                        <input type="text" class="form-control" placeholder="tulis disini.." name="merk" autocomplete="off">
                                        <?php echo form_error('merk', '<span class=" text-small text-danger">', '</span>') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Kegunaan</label>
                                        <input type="text" name="kegunaan" class="form-control" placeholder="tulis disini..">
                                        <?php echo form_error('kegunaan', '<span class=" text-small text-danger">', '</span>') ?>
                                    </div>
                                </div>
                                <div class="col-md-3 px-1">
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input type="number" name="harga" class="form-control" placeholder="tulis disini..">
                                        <?php echo form_error('harga', '<span class=" text-small text-danger">', '</span>') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Jenis</label>
                                        <select name="jenis" class="form-control">
                                            <option value="">==Pilih==</option>
                                            <option value="Obat Bebas">Obat Bebas</option>
                                            <option value="Obat Terbatas">Obat Terbatas</option>
                                            <option value="Obat Narkotika">Obat Narkotika</option>
                                        </select>
                                        <?php echo form_error('jenis', '<span class=" text-small text-danger">', '</span>') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <input type="file" name="foto" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <a href="<?= base_url('obat/'); ?>" class="btn btn-warning btn-fill pull-right">Kembali</a>
                            <button type="submit" class="btn btn-info btn-fill pull-right">Tambah Obat</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>