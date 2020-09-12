<h2></h2>
<div class="panel panel-primary">
	<div class="panel-heading">
	   <strong>Data Petugas</strong>  
	</div>
	
  <div class="panel-body">
    <div class="table-responsive">
	<table class="table table-bordered" id="dataTables-example">
		<thead>
			<tr>
				<th>no</th>
				<th>NIP</th>
				<th>nama</th>
				<th>status</th>
				<th>aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php $nomor = 1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM petugas"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['nip_petugas'] ?></td>
				<td><?php echo $pecah['nama_petugas'] ?></td>
				<td><?php echo $pecah['status'] ?></td>
				<td>
				    <a href="menu.php?halaman=hapus_petugas&id_petugas=<?php echo $pecah['id_petugas'];?>" class="btn btn-danger" onClick='return warning()'>hapus</a>
					<a href="menu.php?halaman=ubah_petugas&id_petugas=<?php echo $pecah['id_petugas'];?>" class="btn btn-warning">ubah</a>
				</td>
			</tr>
		<?php $nomor++; ?>
		<?php } ?>	
		</tbody>
	</table>
  <a href="menu.php?halaman=tambah_petugas" class="btn btn-primary">Tambah</a>
  </div>
 </div>
</div>