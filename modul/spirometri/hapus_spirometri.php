<?php 

$ambil  = $koneksi->query("DELETE FROM spirometri WHERE id_spirometri='$_GET[id_spirometri]'");

 echo "<script>alert('data terhapus');</script>";
 echo "<script>location='menu.php?halaman=spirometri';</script>";


?>