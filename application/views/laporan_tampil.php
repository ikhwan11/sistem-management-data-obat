<div class="content">
    <div class="container-fluid">
        <h4 class="d-print-none ">Filter data Berdasarkan tanggal</h4>
        <div class="d-print-none  row">
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
                    <a href="<?= base_url('welcome/'); ?>" class="btn  btn-warning btn-fill">Kembali</a>
                    <span><small class="text-muted text-warning"> * Tekan tombol filter untuk menampilkan data</small></span>
                </form>
            </div>
        </div>

        <h3 class="d-none d-print-block">Laporan obat di Aritra Farma Batam Bulan <?= date('M Y'); ?></h3>
        <hr>

        <!-- data obat masuk -->
        <div class="row mt-3">
            <div class="col">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Daftar Obat masuk <?= date('M Y'); ?></h4>
                    </div>
                    <div class="card-body table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>No</th>
                                <th>Kode Obat</th>
                                <th>Tanggal</th>
                                <th>Merk Obat</th>
                                <th>Qty masuk</th>
                            </thead>
                            <tbody>
                                <?php
                                $nb = 1;
                                foreach ($masuk as $ms) : ?>
                                    <tr>
                                        <td><?= $nb++; ?></td>
                                        <td><?= $ms['kode_obat']; ?></td>
                                        <td><?= $ms['tanggal']; ?></td>
                                        <td><?= $ms['merk_obat']; ?></td>
                                        <td><?= $ms['qty']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- data obat keluar -->
        <div class="row mt-3">
            <div class="col">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Daftar Obat Keluar <?= date('M Y'); ?></h4>
                    </div>
                    <div class="card-body table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>No</th>
                                <th>Kode Obat</th>
                                <th>Tanggal</th>
                                <th>Merk Obat</th>
                                <th>Keterangan</th>
                                <th>Qty keluar</th>
                            </thead>
                            <tbody>
                                <?php
                                $nb = 1;
                                foreach ($keluar as $kl) : ?>
                                    <tr>
                                        <td><?= $nb++; ?></td>
                                        <td><?= $kl['kode_obat']; ?></td>
                                        <td><?= $kl['tanggal']; ?></td>
                                        <td><?= $kl['merk_obat']; ?></td>
                                        <td><?= $kl['keterangan']; ?></td>
                                        <td><?= $kl['qty']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>