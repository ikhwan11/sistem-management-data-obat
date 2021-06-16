<div class="content">
	<div class="container-fluid">
		<div class="jumbotron jumbotron-fluid" style="background-image:url(<?= base_url('assets/'); ?>/img/jumbotron-image.jpg) ; background-size: 100%; border-radius: 6px ;">
			<div class="container">
				<h3 class="text-white">selamat datang <?= $this->session->userdata('nama_depan'); ?></h3>
				<h1 class="display-4 text-white"><?= date('d, M Y'); ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="card strpied-tabled-with-hover">
					<div class="card-header ">
						<h4 class="card-title">Daftar Obat</h4>
						<p class="card-category">Berikut data obat yang telah habis</p>
						<a href="<?= base_url('obat/'); ?>" class="btn btn-primary btn-fill pull-right btn-sm">Lihat semua</a>
					</div>
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
							</thead>
							<tbody>
								<?php $no = 1;
								foreach ($habis as $hb) : ?>
									<tr>
										<td><?= $no++; ?></td>
										<td>
											<img src="<?= base_url('assets'); ?> /foto_obat/<?= $hb['foto']; ?>" class="rounded float-left" alt="..." width="30">
										</td>
										<td><?= $hb['kode_obat']; ?></td>
										<td><?= $hb['jenis']; ?></td>
										<td><?= $hb['merk_obat']; ?></td>
										<td><?= $hb['kegunaan']; ?></td>
										<td>Rp. <?= number_format($hb['harga'], 0, ',', '.'); ?></td>
										<td><?= $hb['stok']; ?></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="card strpied-tabled-with-hover">
					<div class="card-header ">
						<h4 class="card-title">Daftar Obat</h4>
						<p class="card-category">Berikut data obat keluar</p>
					</div>
					<div class="card-body table-full-width table-responsive">
						<table class="table table-hover table-striped">
							<thead>
								<th>No</th>
								<th>Gambar</th>
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
										<td>
											<img src="<?= base_url('assets'); ?> /foto_obat/<?= $kl['foto']; ?>" class="rounded float-left" alt="..." width="30">
										</td>
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