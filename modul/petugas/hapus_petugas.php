<?php 

$ambil  = $koneksi->query("DELETE FROM petugas WHERE id_petugas='$_GET[id_petugas]'");

 echo "<script>alert('data terhapus');</script>";
 echo "<script>location='menu.php?halaman=petugas';</script>";


?>