<h2></h2>
<?php      
    
    $ambil = $koneksi->query("SELECT * FROM audiometri 
    	  JOIN perusahaan ON audiometri.id_perusahaan = perusahaan.id_perusahaan 
    	  JOIN pegawai_perusahaan ON audiometri.id_pegawai = pegawai_perusahaan.id_pegawai
    	  JOIN manajer_teknis ON audiometri.id_manajer = manajer_teknis.id_manajer
 	      JOIN petugas ON audiometri.id_petugas = petugas.id_petugas");

    if (isset($_POST['cari_au'])) {
 	   $ambil = cari_au($_POST['nama_perusahaan'],$_POST['mulai_uji']);
    }		   

?>
<div class="panel panel-primary">
	<div class="panel-heading">
	   <strong>Audiometri</strong>  
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

  	  <button type="submit" name="cari_au" class="btn btn-primary">Tampilkan data</button>	
  	</form>
  	<br>
    <div class="table-responsive">
	<table class="table table-bordered" id="dataTables-example">
		<thead>
			<tr>
				<th>no</th>
				<th>perusahaan</th>
				<th>Nama</th>
				<th>Bagian</th>
				<th>Umur</th>
				<th>L/P</th>
				<th>Masa kerja</th>
				<th>mulai_uji</th>
				<th>akhir_uji</th>
				<th>telinga kanan (0.5K)</th>
				<th>telinga kanan (1K)</th>
				<th>telinga kanan (2K)</th>
				<th>telinga kanan (3K)</th>
				<th>telinga kanan (4K)</th>
                <th>telinga kanan (6K)</th>
                <th>telinga kanan (8K)</th>
                <th>telinga kiri (0.5K)</th>
				<th>telinga kiri (1K)</th>
				<th>telinga kiri (2K)</th>
				<th>telinga kiri (3K)</th>
				<th>telinga kiri (4K)</th>
                <th>telinga kiri (6K)</th>
                <th>telinga kiri (8K)</th>
                <th>Penilaian</th>
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
				<td><?= $pecah['telinga_kanan_nol'] ?></td>
				<td><?= $pecah['telinga_kanan_satu'] ?></td>
				<td><?= $pecah['telinga_kanan_dua'] ?></td>
				<td><?= $pecah['telinga_kanan_tiga'] ?></td>
				<td><?= $pecah['telinga_kanan_empat'] ?></td>
				<td><?= $pecah['telinga_kanan_enam'] ?></td>
				<td><?= $pecah['telinga_kanan_delapan'] ?></td>
				<td><?= $pecah['telinga_kiri_nol'] ?></td>
				<td><?= $pecah['telinga_kiri_satu'] ?></td>
				<td><?= $pecah['telinga_kiri_dua'] ?></td>
				<td><?= $pecah['telinga_kiri_tiga'] ?></td>
				<td><?= $pecah['telinga_kiri_empat'] ?></td>
				<td><?= $pecah['telinga_kiri_enam'] ?></td>
				<td><?= $pecah['telinga_kiri_delapan'] ?></td>
                <td><?= $pecah['penilaian'] ?></td>

             <?php if($_SESSION['level_user']=="admin"): ?>
				<td>
				    <a href="menu.php?halaman=hapus_audiometri&id_audiometri=<?php echo $pecah['id_audiometri'];?>" class="btn btn-danger" onClick='return warning()'>hapus</a>
					<a href="menu.php?halaman=ubah_audiometri&id_audiometri=<?php echo $pecah['id_audiometri'];?>" class="btn btn-warning">ubah</a>
				</td>
			 <?php endif; ?>
			 	
			</tr>
		<?php $nomor++; ?>
		<?php } ?>	
		</tbody>
	</table>
	<?php if($_SESSION['level_user']=="admin"): ?>
      <a href="menu.php?halaman=tambah_audiometri" class="btn btn-primary">input data analisis</a>
    <?php endif; ?>
      
  <a href="menu.php?halaman=cetak_audiometri" class="btn btn-default">cetak data analisis</a>
  </div>
 </div>
</div>