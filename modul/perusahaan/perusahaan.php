<h2></h2>
<div class="panel panel-primary">
	<div class="panel-heading">
	   <strong>Data Perusahaan</strong>  
	</div>
	
  <div class="panel-body">
    <div class="table-responsive">
	<table class="table table-bordered" id="dataTables-example">
		<thead>
			<tr>
				<th>no</th>
				<th>Nama Perusahaan</th>
				<th>Alamat</th>
				<th>Jenis Perusahaan</th>
				<th>aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php $nomor = 1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM perusahaan"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['nama_perusahaan'] ?></td>
				<td><?php echo $pecah['alamat'] ?></td>
				<td><?php echo $pecah['jenis_perusahaan'] ?></td>
				<td>
				    <a href="menu.php?halaman=hapusperusahaan&id_perusahaan=<?php echo $pecah['id_perusahaan'];?>" class="btn btn-danger" onClick='return warning()'>hapus</a>
					<a href="menu.php?halaman=ubahperusahaan&id_perusahaan=<?php echo $pecah['id_perusahaan'];?>" class="btn btn-warning">ubah</a>
				</td>
			</tr>
		<?php $nomor++; ?>
		<?php } ?>	
		</tbody>
	</table>
  <a href="menu.php?halaman=tambahperusahaan" class="btn btn-primary">Tambah</a>
  </div>
 </div>
</div>