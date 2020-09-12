<?php 

$ambil  = $koneksi->query("DELETE FROM perusahaan WHERE id_perusahaan='$_GET[id_perusahaan]'");

 echo "<script>alert('data terhapus');</script>";
 echo "<script>location='menu.php?halaman=perusahaan';</script>";


?>