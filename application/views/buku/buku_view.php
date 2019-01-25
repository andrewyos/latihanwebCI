<div class="container">
	<div class="row">
		<div class="col-12 text-center mt-3">
			<h1 class="gantiHuruf">Data Buku</h1>
		</div>
		<div class="offset-2 col-md-8">
			<form action="" method="get">
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Masukkan Pencarian.." name="keyword">
					<div class="input-group-append">
						<button class="btn btn-success" type="submit" id="button-addon2">Cari</button>
					</div>
				</div>
			</form>

		</div>

	</div>
	<div class="row mt-3">
		<div class="col-md-12 text-center"><a href="<?= base_url('Buku/tambah')?>" class="btn btn-dark">Tambah Data</a></div>
	</div>
</div>

<div class="row mt-4">
	<div class="offset-2 col-md-8">

		<?php if ($this->session->flashdata('success') == TRUE) : ?>
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
			Data buku<strong> Berhasil!</strong>
			<?= $this->session->flashdata('success');?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;
				</span></button></div>
		<?php endif; ?>
		<ul class="list-group">
			<?php foreach ($buku as $row) : ?>
			<li class="list-group-item">
				<?= $row['judul']?>
				<a href="<?= base_url('Buku/hapus')?>/<?= $row['id_buku'] ?>" class="badge badge-danger float-right" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">Hapus</a>
				<a href="<?= base_url('Buku/edit')?>/<?= $row['id_buku'] ?>" class="badge badge-info float-right">Edit</a>
				<a href="<?= base_url('Buku/detail/')?>/<?= $row['id_buku'] ?>" class="badge badge-success float-right">Detail</a>

			</li>
			<?php endforeach;?>
		</ul>
	</div>
</div>
</div>
