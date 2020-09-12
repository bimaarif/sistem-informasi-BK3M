<h2></h2>

<?php 

    if (isset($_POST['simpan'])) {
    	$koneksi->query("INSERT INTO manajer_teknis
    	(nip_manajer,nama_manajer,status)
    	VALUES('$_POST[nip_manajer]','$_POST[nama_manajer]','$_POST[status]')");

        echo "<div class='alert alert-info'>data tersimpan</div>";	
        echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=manajer_teknis'>";
    }

 ?>
 <div class="panel panel-primary">
    <div class="panel-heading">
       <strong>Tambah data manajer teknis</strong>  
    </div>
  <div class="panel-body">

        <form  method="POST" enctype="multipart/form-data">
             <div class="form-group">
             	  <label>NIP</label>
             	  <input type="text" class="form-control" name="nip_manajer" required>
             </div>

             <div class="form-group">
             	  <label>nama</label>
             	  <input type="text" class="form-control" name="nama_manajer" required>
             </div>

             <div class="form-group">
             	  <label>status</label>
             	  <input type="text" class="form-control" name="status" required>
             </div>
             <button class="btn btn-primary" name="simpan">Simpan</button>
             <a href="menu.php?halaman=manajer_teknis" class="btn btn-default">kembali</a>
        </form>
   </div>
</div>