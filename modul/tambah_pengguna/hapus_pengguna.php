<?php 

$ambil  = $koneksi->query("DELETE FROM tabel_user WHERE id_user='$_GET[id_user]'");

 echo "<script>alert('data terhapus');</script>";
 echo "<script>location='menu.php?halaman=pengguna';</script>";


?>