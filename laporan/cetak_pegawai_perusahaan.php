<?php 
error_reporting(E_ALL);
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
  <title>cetak analisis pegawai</title>
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
   <?php
     $id_pegawai= $_GET['nama'];
     $mulai_uji = $_GET['mulai_uji'];
     
     $q_pegawai = $koneksi->query("SELECT pegawai_perusahaan.*, perusahaan.* FROM pegawai_perusahaan, perusahaan WHERE pegawai_perusahaan.id_perusahaan = perusahaan.id_perusahaan AND id_pegawai = '$id_pegawai' ");

     $data_pegawai = $q_pegawai->fetch_assoc();


     // Mengambil Data PB Dalam darah sesuai dengan id Pegawai dan mulai uji
     $q_pb_dalam_darah = $koneksi->query("SELECT * FROM pb_dalam_darah WHERE id_pegawai = '$id_pegawai' AND mulai_uji ='$mulai_uji'");

     // Mengambil Data PB Dalam darah sesuai dengan id Pegawai dan mulai uji
     $q_cholinesterase = $koneksi->query("SELECT * FROM cholinesterase WHERE id_pegawai = '$id_pegawai' AND mulai_uji ='$mulai_uji'");

     // Mengambil Data PB Dalam darah sesuai dengan id Pegawai dan mulai uji
     $q_spirometri = $koneksi->query("SELECT * FROM spirometri WHERE id_pegawai = '$id_pegawai' AND mulai_uji ='$mulai_uji'");

     // Mengambil Data PB Dalam darah sesuai dengan id Pegawai dan mulai uji
     $q_audiometri = $koneksi->query("SELECT * FROM audiometri WHERE id_pegawai = '$id_pegawai' AND mulai_uji ='$mulai_uji'");

   ?>
    <table>
       <tr>
          <td>Nama Perusahaan</td>
          <td>:</td>
          <td><?php echo $data_pegawai['nama_perusahaan']; ?></td>
       </tr>
       <tr>
         <td>Nama</td>
          <td>:</td>
          <td><?php echo $data_pegawai['nama']; ?></td>
       </tr>
       <tr>
         <td>Umur</td>
         <td>:</td>
         <td><?php echo $data_pegawai['usia']; ?></td>
       </tr>
       <tr>
           <td>Jenis kelamin </td>
           <td>:</td>
           <td><?php echo $data_pegawai['jenis_kelamin'];?></td>
       </tr>
       <tr>
           <td>Bagian</td>
           <td>:</td>
           <td><?php echo $data_pegawai['bagian'];?></td>
       </tr>
       <tr>
           <td>Masa kerja</td>
           <td>:</td>
           <td><?php echo $data_pegawai['masa_kerja'];?></td>
       </tr>
       <tr>
           <td>Mulai Uji</td>
           <td>:</td>
           <td><?php echo changeDateStyle1($mulai_uji)?></td>
       </tr>      
    </table>
    <br>
    <center><h3>HASIL PEMERIKSAAN</h3></center><br>

    <h3>PB DALAM DARAH <small>(<?= $q_pb_dalam_darah->num_rows ?> Data)</small></h3>
    <table>
      <?php while($row_pb_dalam_darah = $q_pb_dalam_darah->fetch_assoc()){ ?>
        <tr>
          <td>Hasil</td>
          <td>:</td>
          <td><?= $row_pb_dalam_darah['hasil'] ?></td>
        </tr>
        <tr>
          <td>Keterangan</td>
          <td>:</td>
          <td><?= $row_pb_dalam_darah['keterangan'] ?></td>
        </tr>
      <?php } ?>
    </table><br>

    
    <h3>CHOLINESTERASE <small>(<?= $q_cholinesterase->num_rows ?> Data)</small></h3>
    <table>
      <?php while($row_cholinesterase = $q_cholinesterase->fetch_assoc()){ ?>
        <tr>
          <td>hasil</td>
          <td>:</td>
          <td><?= $row_cholinesterase['hasil'] ?></td>
        </tr>
        <tr>
          <td>penilaian</td>
          <td>:</td>
          <td><?= $row_cholinesterase['penilaian'] ?></td>
        </tr>
        <tr>
          <td>keterangan</td>
          <td>:</td>
          <td><?= $row_cholinesterase['keterangan'] ?></td>
        </tr>
      <?php } ?>
    </table><br>


    
    <h3>SPIROMETRI <small>(<?= $q_spirometri->num_rows ?> Data)</small></h3>
    <table>
      <?php while($row_spirometri = $q_spirometri->fetch_assoc()){ ?>
        <tr>
          <td>penilaian</td>
          <td>:</td>
          <td><?= $row_spirometri['penilaian'] ?></td>
        </tr>
      <?php } ?>
    </table><br>

    
    <h3>AUDIOMETRI <small>(<?= $q_audiometri->num_rows ?> Data)</small></h3>
    <table>
      <?php while($row_audiometri = $q_audiometri->fetch_assoc()){ ?>
        <tr>
          <td>penilaian</td>
          <td>:</td>
          <td><?= $row_audiometri['penilaian'] ?></td>
        </tr>
      <?php } ?>
    </table><br>  

</body>
</html>