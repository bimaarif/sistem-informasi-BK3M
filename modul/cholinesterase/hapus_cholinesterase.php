<?php 

$ambil  = $koneksi->query("DELETE FROM cholinesterase WHERE id_cholinesterase='$_GET[id_cholinesterase]'");

 echo "<script>alert('data terhapus');</script>";
 echo "<script>location='menu.php?halaman=cholinesterase';</script>";


?>