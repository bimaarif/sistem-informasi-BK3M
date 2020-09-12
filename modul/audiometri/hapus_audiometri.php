<?php 

$ambil  = $koneksi->query("DELETE FROM audiometri WHERE id_audiometri='$_GET[id_audiometri]'");

 echo "<script>alert('data terhapus');</script>";
 echo "<script>location='menu.php?halaman=audiometri';</script>";


?>