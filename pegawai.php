<?php  


include 'config/koneksi.php';

//tampung id dari perusahaan
$id_perusahaan = $_POST['id_perusahaan'];

$sql_pegawai = $koneksi->query("SELECT * FROM pegawai_perusahaan WHERE id_perusahaan=$id_perusahaan");

    echo '<option>-pilih pegawai-</option>';
while ($row_pegawai = $sql_pegawai->fetch_assoc()) {
	echo '<option value="'.$row_pegawai['id_pegawai'].'">'.$row_pegawai['nama'].'</option>';
}
