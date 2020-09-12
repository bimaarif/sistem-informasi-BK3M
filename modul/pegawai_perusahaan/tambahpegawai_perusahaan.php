<h2></h2>


<?php 

    if (isset($_POST['save'])){
    	$koneksi->query("INSERT INTO pegawai_perusahaan
    	(id_perusahaan,nama,jenis_kelamin,usia,masa_kerja,contact_person,bagian)
    	VALUES('$_POST[nama_perusahaan]','$_POST[nama]',
             '$_POST[jenis_kelamin]','$_POST[usia]',
             '$_POST[masa_kerja]','$_POST[contact_person]',
             '$_POST[bagian]')");

        echo "<div class='alert alert-info'>data tersimpan</div>";	
        echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=pegawai_perusahaan'>";
    }

 ?>

<div class="panel panel-primary">
    <div class="panel-heading">
       <strong>data Pegawai Perusahaan</strong>  
    </div>
<div class="panel-body">
<form  method="POST" enctype="multipart/form-data">
     
     <div class="form-group">
     	  <label>Nama Perusahaan</label>
     	  <select name="nama_perusahaan" class="form-control">
     	  <?php $ambil1 = $koneksi->query("SELECT * FROM perusahaan WHERE id_perusahaan"); ?>
           <option>--pilih--</option>
     	  <?php while($pecah1 = $ambil1->fetch_assoc()) : ?>
          	<option value="<?= $pecah1['id_perusahaan']; ?>"><?php echo $pecah1['nama_perusahaan']; ?></option>
          <?php endwhile; ?>	
          </select>
     </div>
     
     <div class="form-group">
        <label>nama pegawai</label>
        <input type="text" class="form-control" name="nama">
     </div>

     <div class="form-group">
     	  <label>Jenis Kelamin</label>
          <select name="jenis_kelamin" class="form-control" required>
          	<option>L</option>
          	<option>P</option>
          </select>
     </div>

     <div class="form-group">
        <label>usia</label>
        <input type="text" class="form-control" name="usia" required>
     </div>

     <div class="form-group">
        <label>Masa Keja</label>
        <input type="text" class="form-control" name="masa_kerja" required>
     </div>

     <div class="form-group">
     	  <label>Contact Person</label>
        <input type="text" class="form-control" name="contact_person" required>
     </div>

     <div class="form-group">
        <label>Bagian</label>
        <input type="text" class="form-control" name="bagian" required>
     </div>
     <button class="btn btn-primary" name="save">Simpan</button>
     <a href="menu.php?halaman=pegawai_perusahaan" class="btn btn-default">kembali</a>
</form>
</div>
</div>