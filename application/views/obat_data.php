<div class="content">
    <div class="container-fluid">
        <h2>Data Obat</h2>
        <?php echo $this->session->flashdata('pesan') ?>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <span><small class="text-warning">* Cari berdasarkan merek obat</small></span>
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
        <?php if (empty($obat)) : ?>
            <tr>
                <td>
                    <div class="alert alert-danger" role="alert">
                        data not found!
                    </div>
                </td>
            </tr>
        <?php endif; ?>
        <?php foreach ($obat as $o) : ?>
            <span class="text-warning">Result : <?= $total_rows; ?></span>
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url('assets'); ?> /foto_obat/<?= $o['foto']; ?>" class="rounded float-left" alt="...">
                        <div class="card-body">
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
                                        <td>Stok tersedia</td>
                                        <td>:</td>
                                        <td><?= $o['stok']; ?></td>
                                    </tr>
                                </thead>
                            </table>
                            </p>
                            <a href="<?= base_url('obat/detail_obat/') . $o['id_obat']; ?>" class="btn btn-warning btn-fill">Tampilkan detail</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="col">
            <?= $this->pagination->create_links();; ?>
        </div>
    </div>
</div>