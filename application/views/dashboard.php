<div class="content">
	<div class="container-fluid">
		<div class="jumbotron jumbotron-fluid" style="background-image:url(<?= base_url('assets/'); ?>/img/jumbotron-image.jpg) ; background-size: 100%; border-radius: 6px ;">
			<div class="container">
				<h3 class="text-white">selamat datang {nama admin}</h3>
				<h1 class="display-4 text-white"><?= date('d, M Y'); ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
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
									<td>0</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
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
								<th>Jenis</th>
								<th>Merk Obat</th>
								<th>Kegunaan</th>
								<th>Harga</th>
								<th>Stok</th>
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
									<td>0</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
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