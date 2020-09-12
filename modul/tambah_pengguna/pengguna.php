<h2></h2>
<div class="panel panel-primary">
	<div class="panel-heading">
	   <strong>Data Pengguna</strong>  
	</div>
	
  <div class="panel-body">
    <div class="table-responsive">
	<table class="table table-bordered" id="dataTables-example">
		<thead>
			<tr>
				<th>no</th>
				<th>Nama</th>
				<th>username</th>
				<th>password</th>
				<th>Level user</th>
				<th>aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php $nomor = 1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM tabel_user"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['nama'] ?></td>
				<td><?php echo $pecah['username'] ?></td>
				<td><?php echo $pecah['password'] ?></td>
				<td><?php echo $pecah['level_user'] ?></td>
				<td>
				    <a href="menu.php?halaman=hapus_pengguna&id_user=<?php echo $pecah['id_user'];?>" class="btn btn-danger" onClick='return warning()'>hapus</a>
					<a href="menu.php?halaman=ubah_pengguna&id_user=<?php echo $pecah['id_user'];?>" class="btn btn-warning">ubah</a>
				</td>
			</tr>
		<?php $nomor++; ?>
		<?php } ?>	
		</tbody>
	</table>
  <a href="menu.php?halaman=tambah_pengguna" class="btn btn-primary">Tambah</a>
  </div>
 </div>
</div>