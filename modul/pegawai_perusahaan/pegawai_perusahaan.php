<div class="panel panel-primary">
	<div class="panel-heading">
	   <strong>data pegawai perusahaan</strong>  
	</div>
<div class="panel-body">
 <div class="table-responsive">
  <table class="table table-bordered" id="dataTables-example">
	<thead>
		<tr>
			<th>no</th>
			<th>Nama Perusahaan</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Usia</th>
			<th>Masa Kerja</th>
			<th>Contact_Person</th>
			<th>Bagian</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php $nomor = 1; ?>
	<?php $ambil = $koneksi->query("SELECT * FROM perusahaan JOIN pegawai_perusahaan ON perusahaan.id_perusahaan=pegawai_perusahaan.id_perusahaan"); ?>
	<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_perusahaan']; ?></td>
			<td><?php echo $pecah['nama']; ?></td>
			<td><?php echo $pecah['jenis_kelamin']; ?></td>
			<td><?php echo $pecah['usia']; ?></td>
			<td><?php echo $pecah['masa_kerja']." "."tahun"; ?></td>
			<td><?php echo $pecah['contact_person']; ?></td>
			<td><?php echo $pecah['bagian']; ?></td>
			<td>
			    <a href="menu.php?halaman=hapuspegawai_perusahaan&id_pegawai=<?php echo $pecah['id_pegawai'];?>" class="btn btn-danger" onClick='return warning()'>hapus</a>
				<a href="menu.php?halaman=ubahpegawai_perusahaan&id_pegawai=<?php echo $pecah['id_pegawai'];?>" class="btn btn-warning">ubah</a>
			</td>
		</tr>
	<?php $nomor++; ?>
	<?php } ?>	
	</tbody>
</table>
<a href="menu.php?halaman=tambahpegawai_perusahaan" class="btn btn-primary">Tambah</a>
</div>
</div>