<?php 

$ambil  = $koneksi->query("DELETE FROM manajer_teknis WHERE id_manajer='$_GET[id_manajer]'");

 echo "<script>alert('data terhapus');</script>";
 echo "<script>location='menu.php?halaman=manajer_teknis';</script>";


?>