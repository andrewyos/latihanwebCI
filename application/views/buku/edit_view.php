<div class="container">
	<div class="row mt-3">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header text-center gantiHuruf">
					Form Edit
				</div>
				<div class="card-body">
					<form action="<?= base_url('Buku/edit/') . $buku['id_buku'] ?>" method="post">
						<div class="form-group">
							<label for="judul">Judul</label>
							<input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Buku..." value="<?php echo $buku['judul'];?>">
						</div>
						<div class="form-group">
							<label for="penulis">Penulis</label>
							<input type="text" class="form-control" name="penulis" id="penulis" placeholder="Nama Penulis..." value="<?php echo $buku['penulis'];?>">
						</div>
						<div class="form-group">
							<label for="tahun_terbit">Tahun Terbit</label>
							<input type="text" class="form-control" name="tahun_terbit" id="tahun_terbit" placeholder="Tahun Terbit..."
							 value="<?php echo $buku['tahun_terbit'];?>">
						</div>
						<div class="form-group">
							<label for="harga">Harga</label>
							<input type="text" class="form-control" name="harga" id="harga" placeholder="Harga Buku..." value="<?php echo $buku['harga'];?>">
						</div>
						<div class="form-group">
							<label for="id_genre">Genre</label>
							<select name="id_genre" id="id_genre" class="form-control">
								<?php       
									foreach($genre as $g) {?>
                                        <option <?php if ($buku['id_genre'] == $g['id_genre']) {echo "selected";}?> value="<?= $g['id_genre'] ?>"> <?= $g['genre'] ?></option>                      
                                <?php }
                                ?>
							</select>
						</div>
						<button class="btn btn-outline-info" type="submit" onclick="return confirm('Apakah data yang diedit sudah benar?')">Ganti</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
