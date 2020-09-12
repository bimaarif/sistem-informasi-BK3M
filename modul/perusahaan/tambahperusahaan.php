<h2></h2>

<?php 

    if (isset($_POST['simpan'])) {
    	$koneksi->query("INSERT INTO perusahaan
    	(nama_perusahaan,alamat,jenis_perusahaan)
    	VALUES('$_POST[nama_perusahaan]','$_POST[alamat]','$_POST[jenis_perusahaan]')");

        echo "<div class='alert alert-info'>data tersimpan</div>";	
        echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=perusahaan'>";
    }

 ?>
 <div class="panel panel-primary">
    <div class="panel-heading">
       <strong>Tambah data perusahaan</strong>  
    </div>
  <div class="panel-body">

        <form  method="POST" enctype="multipart/form-data">
             <div class="form-group">
             	  <label>Nama Perusahaan</label>
             	  <input type="text" class="form-control" name="nama_perusahaan">
             </div>

             <div class="form-group">
             	  <label>Alamat</label>
             	  <input type="text" class="form-control" name="alamat">
             </div>

             <div class="form-group">
             	  <label>Jenis Perusahaan</label>
             	  <input type="text" class="form-control" name="jenis_perusahaan">
             </div>
             <button class="btn btn-primary" name="simpan">Simpan</button>
             <a href="menu.php?halaman=perusahaan" class="btn btn-default">kembali</a>
        </form>
   </div>
</div>