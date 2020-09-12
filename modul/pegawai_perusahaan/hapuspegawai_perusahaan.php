<?php 

$ambil  = $koneksi->query("DELETE FROM pegawai_perusahaan WHERE id_pegawai='$_GET[id_pegawai]'");

 echo "<script>alert('data terhapus');</script>";
 echo "<script>location='menu.php?halaman=pegawai_perusahaan';</script>";


?>