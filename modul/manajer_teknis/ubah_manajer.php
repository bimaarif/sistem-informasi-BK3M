<h2></h2>

<?php 


 $ambil = $koneksi->query("SELECT * FROM manajer_teknis WHERE id_manajer='$_GET[id_manajer]'");
 $pecah = $ambil->fetch_assoc();

 
?>
<div class="panel panel-primary">
    <div class="panel-heading">
       <strong>Ubah Data Pengguna</strong>  
    </div>
<div class="panel-body">

<form  method="POST" enctype="multipart/form-data">
     <div class="form-group">
     	  <label>NIP</label>
     	  <input type="text" class="form-control" name="nip_manajer" value="<?php echo $pecah['nip_manajer']; ?>">
     </div>

     <div class="form-group">
     	  <label>nama</label>
     	  <input type="text" class="form-control" name="nama_manajer" value="<?php echo $pecah['nama_manajer']; ?>">
     </div>

     <div class="form-group">
     	  <label>status</label>
     	  <input type="text" class="form-control" name="status" value="<?php echo $pecah['status']; ?>">
     </div>

     <button class="btn btn-primary" name="ubah">Ubah</button>
     <a href="menu.php?halaman=manajer_teknis" class="btn btn-default">kembali</a>
</form>
</div>
</div>
<?php 

if (isset($_POST['ubah'])) {
   $koneksi->query("UPDATE petugas SET 
       nip_manajer ='$_POST[nip_manajer]',
       nama_manajer='$_POST[nama_manajer]',
       status='$_POST[status]' 
       WHERE id_manajer='$_GET[id_manajer]'");

   echo "<script>alert('data sudah diubah');</script>";
   echo "<script>location='menu.php?halaman=manajer_teknis'</script>";	
}


?>