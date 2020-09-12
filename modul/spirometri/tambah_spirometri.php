<h2></h2>

<?php 

    if (isset($_POST['simpan'])) {
        $koneksi->query("INSERT INTO spirometri
        (id_perusahaan,id_pegawai,
         mulai_uji,akhir_uji,
         alat_ukur,id_manajer,
         id_petugas,
         TB,BB,
         fvc_meas,fvc_persen,
         fev_meas,fev_persen,penilaian)
        VALUES('$_POST[nama_perusahaan]',
               '$_POST[nama]',
               '$_POST[mulai_uji]',
               '$_POST[akhir_uji]',
               '$_POST[alat_ukur]',
               '$_POST[nama_manajer]',
               '$_POST[nama_petugas]',
               '$_POST[TB]',
               '$_POST[BB]',
               '$_POST[fvc_meas]',
               '$_POST[fvc_persen]',
               '$_POST[fev_meas]',
               '$_POST[fev_persen]',
               '$_POST[penilaian]')");

        echo "<div class='alert alert-info'>data tersimpan</div>";  
        echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=spirometri'>";
    }

 ?>
 <div class="panel panel-primary">
    <div class="panel-heading">
       <strong>Input spirometri</strong>  
    </div>
  <div class="panel-body">

        <form  method="POST" enctype="multipart/form-data">
             
            <div class="form-group">
                <label>Nama Perusahaan</label>
                <select name="nama_perusahaan" class="form-control" id="nama_perusahaan">
                <?php $ambil1 = $koneksi->query("SELECT * FROM perusahaan WHERE id_perusahaan"); ?>
                    <option>--pilih--</option>
                <?php while($pecah1 = $ambil1->fetch_assoc()) : ?>
                    <option value="<?= $pecah1['id_perusahaan']; ?>"><?php echo $pecah1['nama_perusahaan']; ?></option>
                <?php endwhile; ?>  
                </select>
            </div>

            <div class="form-group">
                <label>Nama Pegawai</label>
                 <select name="nama" class="form-control" id="nama">
                    <option></option> 
                </select>
            </div>

             <div class="form-group">
                  <label>Mulai Uji</label>
                  <input type="date" class="form-control" name="mulai_uji">
             </div>

             <div class="form-group">
                  <label>Akhir Uji</label>
                  <input type="date" class="form-control" name="akhir_uji">
             </div>

             <div class="form-group">
                <label>Alat Ukur</label>
                <select name="alat_ukur" class="form-control">
                    <option>--pilih--</option>
                    <option>Care Fusion Spirometri</option>  
                </select>
             </div>

             <div class="form-group">
                  <label>Manajer Teknis</label>
                  <?php $ambil3 = $koneksi->query("SELECT * FROM manajer_teknis WHERE id_manajer"); ?>
                  <select name="nama_manajer" class="form-control">
                  <?php 
                  while($pecah3 = $ambil3->fetch_assoc()) {
                       
                      echo "<option value='$pecah3[id_manajer]'>$pecah3[nama_manajer]</option>"; 

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
                       
                      echo "<option value='$pecah4[id_petugas]'>$pecah4[nama_petugas]</option>"; 

                  } 
                  ?>
    
                 </select>
             </div>

             <div class="form-group">
                <label>TB (kg)</label>
                <input type="text" class="form-control" name="TB">
             </div>

             <div class="form-group">
                <label>BB (kg)</label>
                <input type="text" class="form-control" name="BB">
             </div>

             <div class="form-group">
                <label>FVC (MEAS)</label>
                <input type="text" class="form-control" name="fvc_meas">
             </div>

             <div class="form-group">
                <label>FVC (%)</label>
                <input type="text" class="form-control" name="fvc_persen">
             </div>

             <div class="form-group">
                <label>FEV (MEAS)</label>
                <input type="text" class="form-control" name="fev_meas">
             </div>

             <div class="form-group">
                <label>FEV (%)</label>
                <input type="text" class="form-control" name="fev_persen">
             </div>

             <div class="form-group">
                <label>Penilaian</label>
                <input type="text" class="form-control" name="penilaian">
             </div>
             <button class="btn btn-primary" name="simpan">Simpan</button>
             <a href="menu.php?halaman=spirometri" class="btn btn-default">kembali</a>
        </form>
   </div>
</div>