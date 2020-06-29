<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_buku"><i class="fas fa-plus fa-sm"></i> Tambah Buku</button>
	
	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>JUDUL BUKU</th>
			<th>KATEGORI</th> 
			<th>HARGA</th>
			<th>STOK</th>
			<th colspan="3">AKSI</th>
		</tr>

		<?php 
		$no=1;
		foreach($buku as $buku) : ?>

		  <tr>
		  	<td><?php echo $no++ ?></td>
		  	<td><?php echo $buku->judul_buku ?></td>
		  	<td><?php echo $buku->kategori ?></td>
		  	<td><?php echo $buku->harga ?></td>
		  	<td><?php echo $buku->stok ?></td>
			<td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>
			<td><?php echo anchor('admin/data_buku/edit/' .$buku->id_buku, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
			<td><?php echo anchor('admin/data_buku/hapus/' .$buku->id_buku, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>

		  </tr>

		  <?php  endforeach; ?>
		
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_buku" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT PRODUK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="<?php echo base_url(). 'admin/data_buku/tambah_aksi' ;?>" method="post" enctype="multipart/from-data" >

      		<div class="from-group">
      			<label>Judul Buku</label>
      			<input type="text" name="judul_buku" class="form-control">
      		</div>

      		<div class="from-group">
      			<label>Kategori</label>
      			<input type="text" name="kategori" class="form-control">
      		</div>

      		<div class="from-group">
      			<label>Harga</label>
      			<input type="text" name="harga" class="form-control">
      		</div>

      		<div class="from-group">
      			<label>Stok</label>
      			<input type="text" name="stok" class="form-control">
      		</div>

      		<div class="from-group">
      			<label>Gambar</label><br>
      			<input type="file" name="gambar" class="form-control">
      		</div>
      	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

        </form>

    </div>
  </div>
</div>