<div class="content">
    <div class="container-fluid">
        <h4>Filter data Berdasarkan tanggal</h4>
        <div class="row">
            <div class="col">
                <form action="<?= base_url('laporan/'); ?>" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dari tanggal :</label>
                                <input type="date" class="form-control" id="dari" name="dari">
                                <?php echo form_error('dari', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Sampai Tanggal:</label>
                                <input type="date" class="form-control" id="sampai" name="sampai">
                                <?php echo form_error('sampai', '<span class=" text-small text-danger">', '</span>') ?>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success btn-fill">Filter</button>
                    <a href="<?= base_url('admin/'); ?>" class="btn  btn-warning btn-fill">Kembali</a>
                    <span><small class="text-muted text-warning"> * Tekan tombol filter untuk menampilkan data</small></span>
                </form>
            </div>
        </div>
    </div>
</div>