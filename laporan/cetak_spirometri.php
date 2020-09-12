<?php 
error_reporting(0);
session_start();

include '../config/koneksi.php';
include '../config/mainFunction.php';

$time = time();
	
if (!isset($_SESSION['level_user'])) {
       echo "<script>alert('anda harus login');</script>";
       echo "<script>location='index.php';</script>";
       header('location:index.php');
       exit();
 }

?>

<!DOCTYPE html>
<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
	<title>cetak analisis Pb dalam darah</title>
	<style type="text/css">
		body{
			font-family: Arial;
		}

		@media print {
			.no-print{
               display: none;
			}
		}

		table{
			border-collapse: collapse;
		}
	</style>
</head>
<body onload="window.print();">
     <center><h4>BALAI KESELAMATAN DAN KESEHATAN KERJA MEDAN</h4></center>
     <center><h4>DIREKTORAT JENDRAL PEMBINAAN PENGAWASAN KETENAGAKERJAAN</h4></center>
   <img src="../gambar/Logo_Kemnaker.png" align="left"><center><h4>DAN KESELAMATAN DAN KESEHATAN KERJA</h4></center>
   <center><h4>BALAI KESELAMATAN DAN KESEHATAN KERJA MEDAN</h4></center>
   <hr>
   <center><h2>Hasil analisis</h2></center>
   <?php 
     $mulai_uji = $_GET['mulai_uji'];
     $ambil1 = $koneksi->query("SELECT * FROM spirometri JOIN pegawai_perusahaan ON spirometri.id_pegawai = pegawai_perusahaan.id_pegawai JOIN perusahaan ON spirometri.id_perusahaan=perusahaan.id_perusahaan WHERE mulai_uji = '$mulai_uji'");
     $pecah1 = $ambil1->fetch_assoc(); 
   ?>
   <table>
      <tr>
         <td>parameter uji</td>
         <td>:</td>
         <td><?php echo $pecah1['parameter_uji']; ?></td>
      </tr>
      <tr>
         <td>Nama Perusahaan</td>
         <td>:</td>
         <td><?php echo $pecah1['nama_perusahaan']; ?></td>
      </tr>
      <tr>
         <td>Alamat</td>
         <td>:</td>
         <td><?php echo $pecah1['alamat']; ?></td>
      </tr>
      <tr>
          <td>jenis perusahaan</td>
          <td>:</td>
          <td><?php echo $pecah1['jenis_perusahaan'];?></td>
      </tr>
      <tr>
          <td>mulai uji</td>
          <td>:</td>
          <td><?php echo changeDateStyle1($pecah1['mulai_uji']);?></td>
      </tr>
      <tr>
          <td>akhir uji</td>
          <td>:</td>
          <td><?php echo changeDateStyle1($pecah1['akhir_uji']);?></td>
      </tr>
      <tr>
          <td>alat ukur</td>
          <td>:</td>
          <td><?php echo $pecah1['alat_ukur']?></td>
      </tr>       
   </table>
   <table border="1" cellpadding="4" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>no</th>
        <th>Nama</th>
        <th>Bagian</th>
        <th>Umur</th>
        <th>L/P</th>
        <th>Masa kerja</th>
        <th>TB(Kg)</th>
        <th>BB(Kg)</th>
        <th>FVC(Meas)</th>
        <th>FVC(%)</th>
        <th>FEV1(Meas)</th>
        <th>FEV1(%)</th>
        <th>Penilaian</th>
			</tr>
		</thead>
		<tbody>
		<?php $nomor = 1; ?>
		<?php $ambil2 = $koneksi->query("SELECT * FROM spirometri JOIN perusahaan ON spirometri.id_perusahaan = perusahaan.id_perusahaan JOIN pegawai_perusahaan ON spirometri.id_pegawai = pegawai_perusahaan.id_pegawai WHERE mulai_uji = '$mulai_uji'"); ?>
		<?php while($pecah2 = $ambil2->fetch_assoc()){ ?>
			<tr>
				<td><?php echo $nomor; ?></td>
        <td><?php echo $pecah2['nama'] ?></td>
        <td><?php echo $pecah2['bagian'] ?></td>
        <td><?php echo $pecah2['usia'] ?></td>
        <td><?php echo $pecah2['jenis_kelamin'] ?></td>
        <td><?php echo $pecah2['masa_kerja'] ?></td>
        <td><?php echo $pecah2['TB'] ?></td>
        <td><?php echo $pecah2['BB'] ?></td>
        <td><?php echo $pecah2['fvc_meas'] ?></td>
        <td><?php echo $pecah2['fvc_persen'] ?></td>
        <td><?php echo $pecah2['fev_meas'] ?></td>
        <td><?php echo $pecah2['fev_persen'] ?></td>
        <td><?php echo $pecah2['penilaian'] ?></td>
			</tr>
		<?php $nomor++; ?>
		<?php } ?>	
		</tbody>
	</table>

  <?php $nomor = 1; ?>
    <?php $ambil3 = $koneksi->query("SELECT * FROM spirometri 
     JOIN perusahaan ON spirometri.id_perusahaan = perusahaan.id_perusahaan 
     JOIN pegawai_perusahaan ON spirometri.id_pegawai = pegawai_perusahaan.id_pegawai
     JOIN manajer_teknis ON spirometri.id_manajer = manajer_teknis.id_manajer
     JOIN petugas ON spirometri.id_petugas = petugas.id_petugas 
     WHERE mulai_uji = '$mulai_uji'"); ?>
    <?php $pecah3 = $ambil3->fetch_assoc();?>
    <br><br>
<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td align="left">Manajer Teknis</td>
        <td align="right">Medan, <?php echo date('d-M-Y')?></td>
    </tr> 
    <tr>
        <td align="right"></td>
    </tr>
    <tr>
        <td align="left"></td>
        <td align="right">petugas</td>
    </tr>
   
    <tr>
    <td><br/><br/><br/><br/></td>
    </tr>    
    <tr>
        <td align="left">( <?= $pecah3['nama_manajer'] ?> )</td>
        <td align="right">( <?= $pecah3['nama_petugas'] ?> )</td>
    </tr>
    <tr>
        <td align="left">NIP:<?= $pecah3['nip_manajer'] ?></td>
        <td align="right">NIP:<?= $pecah3['nip_petugas'] ?></td>
    </tr>
    <tr>
        <td align="center"></td>
    </tr>
</table>
</body>
</html>

