<h2></h2>

<?php 


 $ambil = $koneksi->query("SELECT * FROM spirometri WHERE id_spirometri='$_GET[id_spirometri]'");
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
             $ambil2 = $koneksi->query("SELECT * FROM pegawai_perusahaan JOIN spirometri ON pegawai_perusahaan.id_pegawai = spirometri.id_pegawai WHERE id_spirometri='$_GET[id_spirometri]'"); 
             while($pecah2 = $ambil2->fetch_assoc()) {
               if($pecah['id_perusahaan'] == $pecah2['id_perusahaan']){
                  echo "<option value='$pecah2[id_pegawai]'selected>$pecah2[nama]</option>";
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
          <label>TB (Kg)</label>
          <input type="text" class="form-control" name="TB" value="<?php echo $pecah['TB']; ?>">
     </div>

     <div class="form-group">
          <label>BB (Kg)</label>
          <input type="text" class="form-control" name="BB" value="<?php echo $pecah['BB']; ?>">
     </div>

     <div class="form-group">
          <label>FVC (MEAS)</label>
          <input type="text" class="form-control" name="fvc_meas" value="<?php echo $pecah['fvc_meas']; ?>">
     </div>

     <div class="form-group">
          <label>FVC (Persen)</label>
          <input type="text" class="form-control" name="fvc_persen" value="<?php echo $pecah['fvc_persen']; ?>">
     </div>

     <div class="form-group">
          <label>FEV (MEAS)</label>
          <input type="text" class="form-control" name="fev_meas" value="<?php echo $pecah['fev_meas']; ?>">
     </div>

     <div class="form-group">
          <label>FEV (Persen)</label>
          <input type="text" class="form-control" name="fev_persen" value="<?php echo $pecah['fev_persen']; ?>">
     </div>

     <div class="form-group">
          <label>Penilaian</label>
          <input type="text" class="form-control" name="penilaian" value="<?php echo $pecah['penilaian']; ?>">
     </div>
     <button class="btn btn-primary" name="ubah">Ubah</button>
     <a href="menu.php?halaman=spirometri" class="btn btn-default">kembali</a>
</form>
</div>
</div>
<?php 

if (isset($_POST['ubah'])) {
   $koneksi->query("UPDATE spirometri SET 
                   id_perusahaan  ='$_POST[nama_perusahaan]',
                   id_pegawai     ='$_POST[nama]',
                   mulai_uji      ='$_POST[mulai_uji]',
                   akhir_uji      ='$_POST[akhir_uji]',
                   alat_ukur      ='$_POST[alat_ukur]',
                   id_manajer     ='$_POST[nama_manajer]',
                   id_petugas     ='$_POST[nama_petugas]',
                   TB             ='$_POST[TB]',
                   BB             ='$_POST[BB]',
                   fvc_meas       ='$_POST[fvc_meas]',
                   fvc_persen     ='$_POST[fvc_persen]',
                   fev_meas       ='$_POST[fev_meas]',
                   fev_persen     ='$_POST[fev_persen]',
                   penilaian      ='$_POST[penilaian]' 
                   WHERE id_spirometri='$_GET[id_spirometri]'");

   echo "<script>alert('data sudah diubah');</script>";
   echo "<script>location='menu.php?halaman=spirometri'</script>";  
}


?>