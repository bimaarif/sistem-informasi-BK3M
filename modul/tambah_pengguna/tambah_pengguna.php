<h2></h2>

<?php 

    if (isset($_POST['simpan'])) {
    	$koneksi->query("INSERT INTO tabel_user
    	(nama,username,password,level_user)
    	VALUES('$_POST[nama]','$_POST[username]','$_POST[password]','$_POST[level_user]')");

        echo "<div class='alert alert-info'>data tersimpan</div>";	
        echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=pengguna'>";
    }

 ?>
 <div class="panel panel-primary">
    <div class="panel-heading">
       <strong>Tambah data pengguna</strong>  
    </div>
  <div class="panel-body">

        <form  method="POST" enctype="multipart/form-data">
             <div class="form-group">
             	  <label>Nama</label>
             	  <input type="text" class="form-control" name="nama" required>
             </div>

             <div class="form-group">
             	  <label>username</label>
             	  <input type="text" class="form-control" name="username" required>
             </div>

             <div class="form-group">
             	  <label>password</label>
             	  <input type="text" class="form-control" name="password" max="6" required>
             </div>

             <div class="form-group">
                  <label>Level user</label>
                  <select name="level_user" class="form-control" >
                      <option>admin</option>
                      <option>staff</option>
                      <option>kepala</option>
                      option
                  </select>
             </div>
             <button class="btn btn-primary" name="simpan">Simpan</button>
             <a href="menu.php?halaman=pengguna" class="btn btn-default">kembali</a>
        </form>
   </div>
</div>