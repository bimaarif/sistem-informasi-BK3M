<h2></h2>

<?php 


 $ambil = $koneksi->query("SELECT * FROM perusahaan WHERE id_perusahaan='$_GET[id_perusahaan]'");
 $pecah = $ambil->fetch_assoc();

 
?>
<div class="panel panel-primary">
    <div class="panel-heading">
       <strong>Ubah Data Perusahaan</strong>  
    </div>
<div class="panel-body">

<form  method="POST" enctype="multipart/form-data">
     <div class="form-group">
     	  <label>Nama Perusahaan</label>
     	  <input type="text" class="form-control" name="nama_perusahaan" value="<?php echo $pecah['nama_perusahaan']; ?>">
     </div>

     <div class="form-group">
     	  <label>Alamat</label>
     	  <input type="text" class="form-control" name="alamat" value="<?php echo $pecah['alamat']; ?>">
     </div>

     <div class="form-group">
     	  <label>Jenis Perusahaan</label>
     	  <input type="text" class="form-control" name="jenis_perusahaan" value="<?php echo $pecah['jenis_perusahaan']; ?>">
     </div>
     <button class="btn btn-primary" name="ubah">Ubah</button>
     <a href="menu.php?halaman=perusahaan" class="btn btn-default">kembali</a>
</form>
</div>
</div>
<?php 

if (isset($_POST['ubah'])) {
   $koneksi->query("UPDATE perusahaan SET nama_perusahaan='$_POST[nama_perusahaan]',alamat='$_POST[alamat]',jenis_perusahaan='$_POST[jenis_perusahaan]' WHERE id_perusahaan='$_GET[id_perusahaan]'");
   echo "<script>alert('data sudah diuabah');</script>";
   echo "<script>location='menu.php?halaman=perusahaan'</script>";	
}


?>