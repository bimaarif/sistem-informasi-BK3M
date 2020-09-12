<h2></h2>

<?php 


 $ambil = $koneksi->query("SELECT * FROM tabel_user WHERE id_user='$_GET[id_user]'");
 $pecah = $ambil->fetch_assoc();

 
?>
<div class="panel panel-primary">
    <div class="panel-heading">
       <strong>Ubah Data Pengguna</strong>  
    </div>
<div class="panel-body">

<form  method="POST" enctype="multipart/form-data">
     <div class="form-group">
     	  <label>Nama Perusahaan</label>
     	  <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama']; ?>">
     </div>

     <div class="form-group">
     	  <label>username</label>
     	  <input type="text" class="form-control" name="username" value="<?php echo $pecah['username']; ?>">
     </div>

     <div class="form-group">
     	  <label>password</label>
     	  <input type="text" class="form-control" name="password" value="<?php echo $pecah['password']; ?>">
     </div>

     <div class="form-group">
          <label>level user</label>
          <select name="level_user" value="<?php echo $pecah['level_user']; ?>" class="form-control">
              <option>admin</option>
              <option>staff_bk3m</option>
              <option>kepala_bk3m</option>
          </select>
     </div>
     <button class="btn btn-primary" name="ubah">Ubah</button>
     <a href="menu.php?halaman=pengguna" class="btn btn-default">kembali</a>
</form>
</div>
</div>
<?php 

if (isset($_POST['ubah'])) {
   $koneksi->query("UPDATE tabel_user SET nama ='$_POST[nama]',username='$_POST[username]',password='$_POST[password]' WHERE id_user='$_GET[id_user]'");
   echo "<script>alert('data sudah diuabah');</script>";
   echo "<script>location='menu.php?halaman=pengguna'</script>";	
}


?>