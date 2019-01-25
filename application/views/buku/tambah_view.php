<div class="container">
	<div class="row mt-3">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header text-center gantiHuruf">
					Form Tambah Data Buku
				</div>
				<div class="card-body">
					<form action="" method="post">
						<div class="form-group">
							<label for="judul">Judul</label>
							<input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Buku..." value="<?= $this->form_validation->set_value('judul');?>">
							<small class="form-text text-danger">
								<?=form_error('judul')?></small>
						</div>
						<div class="form-group">
							<label for="penulis">Penulis</label>
							<input type="text" class="form-control" name="penulis" id="penulis" placeholder="Nama Penulis..." value="<?= $this->form_validation->set_value('penulis');?>">
							<small class="form-text text-danger">
								<?=form_error('penulis')?></small>
						</div>
						<div class="form-group">
							<label for="tahun_terbit">Tahun Terbit</label>
							<input type="text" class="form-control" name="tahun_terbit" id="tahun_terbit" placeholder="Tahun Terbit..."
							 value="<?= $this->form_validation->set_value('tahun_terbit');?>">
							<small class="form-text text-danger">
								<?=form_error('tahun_terbit')?></small>
						</div>
						<div class="form-group">
							<label for="harga">Harga</label>
							<input type="text" class="form-control" name="harga" id="harga" placeholder="Harga Buku..." value="<?= $this->form_validation->set_value('harga');?>">
							<small class="form-text text-danger">
								<?=form_error('harga')?></small>
						</div>
						<div class="form-group">
							<label for="id_genre">Genre</label>
							<select name="id_genre" id="id_genre" class="form-control">
								<?php       
                                    foreach($genre as $g) {?>
                                        <option value="<?= $g['id_genre'] ?>"> <?= $g['genre'] ?></option>
                                
                                <?php }
                                ?>
							</select>
						</div>
						<button class="btn btn-outline-success" onclick="return confirm('Apakah data yang ditambahkan sudah benar?')"
						 type="submit">Tambah</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
