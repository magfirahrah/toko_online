<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA BUKU</h3>

	<?php foreach($buku as $buku) :?>

		<form method="post" action="<?php echo base_url(). 'admin/data_buku/update' ; ?>">

		<div class="for-group">
			<label>Judul buku</label>
			<input type="text" name="judul_buku" class="form-control" value="<?php echo $buku->judul_buku ?>">
		</div>
		
		<div class="for-group">
			<label>Kategori</label>
			<input type="hidden" name="id_buku" class="form-control" value="<?php echo $buku->id_buku ?>">
			<input type="text" name="kategori" class="form-control" value="<?php echo $buku->kategori ?>">
		</div>

		<div class="for-group">
			<label>Harga</label>
			<input type="text" name="harga" class="form-control" value="<?php echo $buku->harga ?>">
		</div>

		<div class="for-group">
			<label>Stok</label>
			<input type="text" name="stok" class="form-control" value="<?php echo $buku->stok ?>">
		</div>

		<button type="submit" class="btn btn-primary btn-sm mt-3"> Simpan</button>

		</form>
	<?php endforeach; ?>
</div>