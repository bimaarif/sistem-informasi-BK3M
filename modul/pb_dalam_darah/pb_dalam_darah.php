<h2></h2>
<?php

 $ambil = $koneksi->query("SELECT * FROM pb_dalam_darah 
 	  JOIN perusahaan ON pb_dalam_darah.id_perusahaan = perusahaan.id_perusahaan 
 	  JOIN pegawai_perusahaan ON pb_dalam_darah.id_pegawai = pegawai_perusahaan.id_pegawai
 	  JOIN manajer_teknis ON pb_dalam_darah.id_manajer = manajer_teknis.id_manajer
 	  JOIN petugas ON pb_dalam_darah.id_petugas = petugas.id_petugas");

 if (isset($_POST['cari_pb'])) {
 	 $ambil = cari_pb($_POST['nama_perusahaan'],$_POST['mulai_uji']);
 }	    

?>

<div class="panel panel-primary">
	<div class="panel-heading">
	   <strong>Pb Dalam Darah</strong>  
	</div>
	
  <div class="panel-body">
  	<form method="POST" class="navbar-form">
	  	  <div class="form-group">	
	  		<label>Nama perusahaan</label>
	  		<input type="text" name="nama_perusahaan" class="form-control">
	  	  </div>

	  	  <div class="form-group">	
	  		<label>Tanggal_pemeriksaan</label>
	  		<input type="date" name="mulai_uji" class="form-control">
	  	  </div>
	  	  <button type="submit" name="cari_pb" class="btn btn-primary">Tampilkan data</button>	
  	</form>
  	<br>
    <div class="table-responsive">
	<table class="table table-bordered" id="dataTables-example">
		<thead>
			<tr>
				<th>no</th>
				<th>Perusahaan</th>
				<th>Nama</th>
				<th>Bagian</th>
				<th>Umur</th>
				<th>L/P</th>
				<th>Masa kerja</th>
				<th>mulai uji</th>
				<th>akhir uji</th>
				<th>Hasil(Ugr/dL)</th>
				<th>Keterangan</th>
			  <?php if($_SESSION['level_user']=="admin"): ?>
				<th>aksi</th>
			  <?php endif; ?>	
			</tr>
		</thead>
		<tbody>
		<?php $nomor = 1; ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
			<tr>
				<td><?= $nomor; ?></td>
				<td><?= $pecah['nama_perusahaan'] ?></td>
				<td><?= $pecah['nama'] ?></td>
				<td><?= $pecah['bagian'] ?></td>
				<td><?= $pecah['usia'] ?></td>
				<td><?= $pecah['jenis_kelamin'] ?></td>
				<td><?= $pecah['masa_kerja'] ?></td>
				<td><?= $pecah['mulai_uji'] ?></td>
				<td><?= $pecah['akhir_uji'] ?></td>
				<td><?= $pecah['hasil'] ?></td>
                <td><?= $pecah['keterangan'] ?></td>

              <?php if($_SESSION['level_user']=="admin"): ?>
				<td>
				    <a href="menu.php?halaman=hapuspb_dalam_darah&id_pb_dalam_darah=<?php echo $pecah['id_pb_dalam_darah'];?>" class="btn btn-danger" onClick='return warning()'>hapus</a>
					<a href="menu.php?halaman=ubahpb_dalam_darah&id_pb_dalam_darah=<?php echo $pecah['id_pb_dalam_darah'];?>" class="btn btn-warning">ubah</a>
				</td>
			  <?php endif; ?>

			</tr>
		<?php $nomor++; ?>
		<?php } ?>	
		</tbody>
	</table>
<?php if($_SESSION['level_user']=="admin"): ?>	
  <a href="menu.php?halaman=tambahpb_dalam_darah" class="btn btn-primary">input data analisis</a>
<?php endif; ?>  
  <a href="menu.php?halaman=cetakpb_dalam_darah"  class="btn btn-default">cetak data analisis</a>
  </div>
 </div>
</div>