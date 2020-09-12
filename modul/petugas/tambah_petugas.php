<h2></h2>

<?php 

    if (isset($_POST['simpan'])) {
    	$koneksi->query("INSERT INTO petugas
    	(nip_petugas,nama_petugas,status)
    	VALUES('$_POST[nip_petugas]','$_POST[nama_petugas]','$_POST[status]')");

        echo "<div class='alert alert-info'>data tersimpan</div>";	
        echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=petugas'>";
    }

 ?>
 <div class="panel panel-primary">
    <div class="panel-heading">
       <strong>Tambah data petugas</strong>  
    </div>
  <div class="panel-body">

        <form  method="POST" enctype="multipart/form-data">
             <div class="form-group">
             	  <label>NIP</label>
             	  <input type="text" class="form-control" name="nip_petugas" required>
             </div>

             <div class="form-group">
             	  <label>nama</label>
             	  <input type="text" class="form-control" name="nama_petugas" required>
             </div>

             <div class="form-group">
             	  <label>status</label>
             	  <input type="text" class="form-control" name="status" required>
             </div>
             <button class="btn btn-primary" name="simpan">Simpan</button>
             <a href="menu.php?halaman=petugas" class="btn btn-default">kembali</a>
        </form>
   </div>
</div>