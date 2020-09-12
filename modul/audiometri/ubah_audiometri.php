<h2></h2>

<?php 


 $ambil = $koneksi->query("SELECT * FROM audiometri WHERE id_audiometri='$_GET[id_audiometri]'");
 $pecah = $ambil->fetch_assoc();

 
?>

<div class="panel panel-primary">
    <div class="panel-heading">
       <strong>Ubah Data Spirometri</strong>  
    </div>
<div class="panel-body">

<form  method="POST" enctype="multipart/form-data">

    <div class="form-group">
        <label>Nama Perusahaan</label>
        <select name="nama_perusahaan" class="form-control" id="nama_perusahaan">
            <?php 
             $ambil1 = $koneksi->query("SELECT * FROM perusahaan"); 
             while($pecah1 = $ambil1->fetch_assoc()) {
               if($pecah['id_perusahaan'] == $pecah1['id_perusahaan']){
                  echo "<option value='$pecah1[id_perusahaan]' selected>$pecah1[nama_perusahaan]</option>";
               }else{
                  echo "<option value='$pecah1[id_perusahaan]'>$pecah1[nama_perusahaan]</option>";
               }
               
            } 
        ?>  
        </select>
    </div>

    <div class="form-group">
        <label>Nama Pegawai</label>
        <select name="nama" class="form-control" id="nama">
            <?php 
             $ambil2 = $koneksi->query("SELECT * FROM pegawai_perusahaan JOIN audiometri ON pegawai_perusahaan.id_pegawai = audiometri.id_pegawai WHERE id_audiometri='$_GET[id_audiometri]'"); 
             while($pecah2 = $ambil2->fetch_assoc()) {
               if($pecah['id_pegawai'] == $pecah2['id_pegawai']){
                  echo "<option value='$pecah2[id_pegawai]' selected>$pecah2[nama]</option>";
               }else{
                  echo "<option value='$pecah2[id_pegawai]' >$pecah2[nama]</option>";
               }
               
            } 
        ?>    
        </select>
    </div>

    <div class="form-group">
        <label>Mulai Uji</label>
        <input type="date" class="form-control" name="mulai_uji" value="<?php echo $pecah['mulai_uji']; ?>">
    </div>

    <div class="form-group">
        <label>Akhir Uji</label>
        <input type="date" class="form-control" name="akhir_uji" value="<?php echo $pecah['akhir_uji']; ?>">
    </div>

    <div class="form-group">
        <label>Alat Ukur</label>
        <input type="text" class="form-control" name="alat_ukur" value="<?php echo $pecah['alat_ukur']; ?>">
    </div>

     <div class="form-group">
          <label>Manajer Teknis</label>
          <?php $ambil3 = $koneksi->query("SELECT * FROM manajer_teknis WHERE id_manajer"); ?>
            <select name="nama_manajer" class="form-control">
              <?php 
              while($pecah3 = $ambil3->fetch_assoc()) {
                 if($pecah['id_manajer'] == $pecah3['id_manajer']){      
                  echo "<option value='$pecah3[id_manajer]' selected>$pecah3[nama_manajer]</option>"; 
                 }else{
                  echo "<option value='$pecah3[id_manajer]'>$pecah3[nama_manajer]</option>";
                 }
              } 
              ?>
    
            </select>
     </div>

     <div class="form-group">
          <label>Petugas</label>
          <?php $ambil4 = $koneksi->query("SELECT * FROM petugas WHERE id_petugas"); ?>
          <select name="nama_petugas" class="form-control">
              <?php 
              while($pecah4 = $ambil4->fetch_assoc()) {
                if($pecah['id_petugas'] == $pecah4['id_petugas']){       
                 echo "<option value='$pecah4[id_petugas]' selected>$pecah4[nama_petugas]</option>"; 
                }else{
                 echo "<option value='$pecah4[id_petugas]'>$pecah4[nama_petugas]</option>"; 
                }
              } 
              ?>
    
          </select>
     </div>

     <div class="form-group">
          <label>Telinga kanan (0.5K)</label>
          <input type="number" class="form-control" name="telinga_kanan_nol" value="<?php echo $pecah['telinga_kanan_nol']; ?>">
     </div>

     <div class="form-group">
          <label>Telinga kanan (1K)</label>
          <input type="number" class="form-control" name="telinga_kanan_satu" value="<?php echo $pecah['telinga_kanan_satu']; ?>">
     </div>

     <div class="form-group">
          <label>Telinga kanan (2K)</label>
          <input type="number" class="form-control" name="telinga_kanan_dua" value="<?php echo $pecah['telinga_kanan_dua']; ?>">
     </div>

     <div class="form-group">
          <label>Telinga kanan(3K)</label>
          <input type="number" class="form-control" name="telinga_kanan_tiga" value="<?php echo $pecah['telinga_kanan_tiga']; ?>">
     </div>

     <div class="form-group">
          <label>Telinga kanan (4K)</label>
          <input type="number" class="form-control" name="telinga_kanan_empat" value="<?php echo $pecah['telinga_kanan_empat']; ?>">
     </div>

     <div class="form-group">
          <label>Telinga kanan(6K)</label>
          <input type="number" class="form-control" name="telinga_kanan_enam" value="<?php echo $pecah['telinga_kanan_enam']; ?>">
     </div>

      <div class="form-group">
          <label>Telinga kanan(8K)</label>
          <input type="number" class="form-control" name="telinga_kanan_8" value="<?php echo $pecah['telinga_kanan_delapan']; ?>">
     </div>



     <div class="form-group">
          <label>Telinga kiri (0.5K)</label>
          <input type="number" class="form-control" name="telinga_kiri_nol" value="<?php echo $pecah['telinga_kiri_nol']; ?>">
     </div>

     <div class="form-group">
          <label>Telinga kiri (1K)</label>
          <input type="number" class="form-control" name="telinga_kiri_satu" value="<?php echo $pecah['telinga_kiri_satu']; ?>">
     </div>

     <div class="form-group">
          <label>Telinga kiri (2K)</label>
          <input type="number" class="form-control" name="telinga_kiri_dua" value="<?php echo $pecah['telinga_kiri_dua']; ?>">
     </div>

     <div class="form-group">
          <label>Telinga kiri (3K)</label>
          <input type="number" class="form-control" name="telinga_kiri_tiga" value="<?php echo $pecah['telinga_kiri_tiga']; ?>">
     </div>

     <div class="form-group">
          <label>Telinga kiri (4K)</label>
          <input type="number" class="form-control" name="telinga_kiri_empat" value="<?php echo $pecah['telinga_kiri_empat']; ?>">
     </div>

     <div class="form-group">
          <label>Telinga kiri(6K)</label>
          <input type="number" class="form-control" name="telinga_kiri_enam" value="<?php echo $pecah['telinga_kiri_enam']; ?>">
     </div>

      <div class="form-group">
          <label>Telinga kiri(8K)</label>
          <input type="number" class="form-control" name="telinga_kiri_delapan" value="<?php echo $pecah['telinga_kiri_delapan']; ?>">
     </div>

     <div class="form-group">
          <label>Penilaian</label>
          <input type="text" class="form-control" name="penilaian" value="<?php echo $pecah['penilaian']; ?>">
     </div>
     <button class="btn btn-primary" name="ubah">Ubah</button>
     <a href="menu.php?halaman=audiometri" class="btn btn-default">kembali</a>
</form>
</div>
</div>

<?php 

if (isset($_POST['ubah'])) {
   $koneksi->query("UPDATE audiometri SET 
                   id_perusahaan  ='$_POST[nama_perusahaan]',
                   id_pegawai     ='$_POST[nama]',
                   mulai_uji      ='$_POST[mulai_uji]',
                   akhir_uji      ='$_POST[akhir_uji]',
                   alat_ukur      ='$_POST[alat_ukur]',
                   id_manajer     ='$_POST[nama_manajer]',
                   id_petugas     ='$_POST[nama_petugas]',
                   telinga_kanan_nol ='$_POST[telinga_kanan_nol]',
                   telinga_kanan_satu='$_POST[telinga_kanan_satu]',
                   telinga_kanan_dua ='$_POST[telinga_kanan_dua]',
                   telinga_kanan_tiga ='$_POST[telinga_kanan_tiga]',
                   telinga_kanan_empat ='$_POST[telinga_kanan_empat]',
                   telinga_kanan_enam  ='$_POST[telinga_kanan_enam]',
                   telinga_kanan_delapan ='$_POST[telinga_kanan_delapan]',
                   telinga_kanan_nol ='$_POST[telinga_kiri_nol]',
                   telinga_kiri_satu='$_POST[telinga_kiri_satu]',
                   telinga_kiri_dua ='$_POST[telinga_kiri_dua]',
                   telinga_kiri_tiga ='$_POST[telinga_kiri_tiga]',
                   telinga_kiri_empat ='$_POST[telinga_kiri_empat]',
                   telinga_kiri_enam  ='$_POST[telinga_kiri_enam]',
                   telinga_kiri_delapan ='$_POST[telinga_kiri_delapan]',
                   penilaian      ='$_POST[penilaian]' 
                   WHERE id_audiometri='$_GET[id_audiometri]'");

   echo "<script>alert('data sudah diubah');</script>";
   echo "<script>location='menu.php?halaman=audiometri'</script>";  
}


?>