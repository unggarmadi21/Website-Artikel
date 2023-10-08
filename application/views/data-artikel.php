<div class="container">
	<div class="text-center mt-5 mb-5"><a href="<?php echo site_url('') ?>"><img
				src="<?php echo base_url('assets/icon/logo.png')?>" id="logoimg" alt=" Logo" /></a>
	</div>
	<div class="well">
		<a href="">
			<button type="button" class="btn btn-green green mb-3"><i class="icon-plus icon-white"> </i> Tambah</button>
		</a>
	</div>
	<table id="myTable" class="table table-striped" style="width:100%">
		<thead class="text-center"></thead>
		</thead>
		<tr>
			<th>Judul Artikel</th>
			<th>Isi Artikel</th>
			<th>Thumbnail Artikel</th>
			<th>Tag Artikel</th>
			<th>Kategori Artikel</th>
			<th>Aksi</th>
		</tr>
		</thead>
		<tbody class="text-center"></tbody>
		<?php
		if (!empty($data_artikel)) {
			//load data 
			foreach ($data_artikel as $data) {
				$judul_artikel = $data['judul_artikel'];
				$isi_artikel = $data['isi_artikel'];
				$thumbnail_artikel = $data['thumbnail_artikel'];
				$tag_artikel = $data['tag_artikel'];
				$kategori_artikel = $data['kategori_artikel'];
			}
		}
		?>
		<tr>
			<td>
				<?php echo $judul_artikel; ?>
			</td>
			<td>
				<?php echo $isi_artikel; ?>
			</td>
			<td>
				<?php echo $thumbnail_artikel; ?>
			</td>
			<td>
				<?php echo $tag_artikel; ?>
			</td>
			<td>
				<?php echo $kategori_artikel; ?>
			</td>
			<td>
				<a class=" btn btn-info mb-3" href=""><i class="icon-pencil icon-white"></i> Ubah</a>
				<a href="" class="btn red"><i class="icon-remove icon-white"></i> Hapus</a>
			</td>
		</tr>
		</tbody>
	</table>
</div>
