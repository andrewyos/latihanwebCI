<div class="container">
	<div class="row mt-3">
		<div class="col-md-6 offset-3">
			<div class="card">
				<h5 class="card-header text-center">Detail Data Buku</h5>
				<div class="card-body">
					<h5 class="card-title"><?= $buku['judul']; ?></h5>
					<p class="card-text">Genre : <?= $buku['genre']; ?></p>
					<p class="card-text">Penulis : <?= $buku['penulis']; ?></p>
					<p class="card-text">Tahun Terbit : <?= $buku['tahun_terbit']; ?></p>
					<p class="card-text">Harga : <?= $buku['harga']; ?></p>
					<div class="row">
                        <div class="col-12 text-center">
                            <a href="<?= base_url('Buku/index')?>" class="btn btn-primary ">Kembali</a>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
