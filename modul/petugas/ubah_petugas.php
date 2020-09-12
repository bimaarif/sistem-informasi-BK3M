<h2></h2>

<?php 


 $ambil = $koneksi->query("SELECT * FROM petugas WHERE id_petugas='$_GET[id_petugas]'");
 $pecah = $ambil->fetch_assoc();

 
?>
<div class="panel panel-primary">
    <div class="panel-heading">
       <strong>Ubah Data petugas</strong>  
    </div>
<div class="panel-body">

<form  method="POST" enctype="multipart/form-data">
     <div class="form-group">
     	  <label>NIP</label>
     	  <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nip_petugas']; ?>">
     </div>

     <div class="form-group">
     	  <label>nama</label>
     	  <input type="text" class="form-control" name="jabatan" value="<?php echo $pecah['nama_petugas']; ?>">
     </div>

     <div class="form-group">
     	  <label>status</label>
     	  <input type="text" class="form-control" name="status" value="<?php echo $pecah['status']; ?>">
     </div>

     <button class="btn btn-primary" name="ubah">Ubah</button>
     <a href="menu.php?halaman=petugas" class="btn btn-default">kembali</a>
</form>
</div>
</div>
<?php 

if (isset($_POST['ubah'])) {
   $koneksi->query("UPDATE petugas SET 
    nip_petugas ='$_POST[nip_petugas]',
    nama_petugas='$_POST[nama_petugas]',
    status='$_POST[status]' 
    WHERE id_petugas='$_GET[id_petugas]'");
   
   echo "<script>alert('data sudah diubah');</script>";
   echo "<script>location='menu.php?halaman=petugas'</script>";	
}


?>