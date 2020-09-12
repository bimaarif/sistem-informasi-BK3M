<?php 

$ambil  = $koneksi->query("DELETE FROM pb_dalam_darah WHERE id_pb_dalam_darah='$_GET[id_pb_dalam_darah]'");

 echo "<script>alert('data terhapus');</script>";
 echo "<script>location='menu.php?halaman=pb_dalam_darah';</script>";


?>