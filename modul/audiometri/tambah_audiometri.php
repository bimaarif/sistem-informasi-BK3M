<h2></h2>

<?php 

    if (isset($_POST['simpan'])) {
        $koneksi->query("INSERT INTO audiometri
        (id_perusahaan,id_pegawai,
         mulai_uji,akhir_uji,
         alat_ukur,id_manajer,
         id_petugas,
         telinga_kanan_nol,telinga_kanan_satu,
         telinga_kanan_dua,telinga_kanan_tiga,
         telinga_kanan_empat,telinga_kanan_enam,telinga_kanan_delapan,
         telinga_kiri_nol,telinga_kiri_satu,
         telinga_kiri_dua,telinga_kiri_tiga,
         telinga_kiri_empat,telinga_kiri_enam,telinga_kiri_delapan,
         penilaian)
        VALUES('$_POST[nama_perusahaan]',
               '$_POST[nama]',
               '$_POST[mulai_uji]',
               '$_POST[akhir_uji]',
               '$_POST[alat_ukur]',
               '$_POST[nama_manajer]',
               '$_POST[nama_petugas]',
               '$_POST[telinga_kanan_nol]',
               '$_POST[telinga_kanan_satu]',
               '$_POST[telinga_kanan_dua]',
               '$_POST[telinga_kanan_tiga]',
               '$_POST[telinga_kanan_empat]',
               '$_POST[telinga_kanan_enam]',
               '$_POST[telinga_kanan_delapan]',
               '$_POST[telinga_kiri_nol]',
               '$_POST[telinga_kiri_satu]',
               '$_POST[telinga_kiri_dua]',
               '$_POST[telinga_kiri_tiga]',
               '$_POST[telinga_kiri_empat]',
               '$_POST[telinga_kiri_enam]',
               '$_POST[telinga_kiri_delapan]',
               '$_POST[penilaian]')");

        echo "<div class='alert alert-info'>data tersimpan</div>";  
        echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=audiometri'>";
    }

 ?>
 <div class="panel panel-primary">
    <div class="panel-heading">
       <strong>Input Audiometri</strong>  
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
                    <option>Audiometer Oscilla SM 950</option>  
                </select>
             </div>

             <div class="form-group">
                  <label>Manajer Teknis</label>
                  <?php $ambil3 = $koneksi->query("SELECT * FROM manajer_teknis"); ?>
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
                   <?php $ambil4 = $koneksi->query("SELECT * FROM petugas"); ?>
                  <select name="nama_petugas" class="form-control">
                  <?php 
                  while($pecah4 = $ambil4->fetch_assoc()) {
                       
                      echo "<option value='$pecah4[id_petugas]'>$pecah4[nama_petugas]</option>"; 

                  } 
                  ?>
    
                 </select>
             </div>

             <div class="form-group">
                <label>Telinga kanan (0.5K)</label>
                <input type="number" class="form-control" name="telinga_kanan_nol">
             </div>

             <div class="form-group">
                <label>Telinga kanan (1K)</label>
                <input type="number" class="form-control" name="telinga_kanan_satu">
             </div>

             <div class="form-group">
                <label>Telinga kanan (2K)</label>
                <input type="number" class="form-control" name="telinga_kanan_dua">
             </div>

             <div class="form-group">
                <label>Telinga kanan (3K)</label>
                <input type="number" class="form-control" name="telinga_kanan_tiga">
             </div>

             <div class="form-group">
                <label>Telinga kanan (4K)</label>
                <input type="number" class="form-control" name="telinga_kanan_empat">
             </div>

             <div class="form-group">
                <label>Telinga kanan (6K)</label>
                <input type="number" class="form-control" name="telinga_kanan_enam">
             </div>

             <div class="form-group">
                <label>Telinga kanan (8K)</label>
                <input type="number" class="form-control" name="telinga_kanan_delapan">
             </div>

             <div class="form-group">
                <label>Telinga kiri (0.5K)</label>
                <input type="number" class="form-control" name="telinga_kiri_nol">
             </div>

             <div class="form-group">
                <label>Telinga kiri (1K)</label>
                <input type="number" class="form-control" name="telinga_kiri_satu">
             </div>

             <div class="form-group">
                <label>Telinga kiri (2K)</label>
                <input type="number" class="form-control" name="telinga_kiri_dua">
             </div>

             <div class="form-group">
                <label>Telinga kiri (3K)</label>
                <input type="number" class="form-control" name="telinga_kiri_tiga">
             </div>

             <div class="form-group">
                <label>Telinga kiri (4K)</label>
                <input type="number" class="form-control" name="telinga_kiri_empat">
             </div>

             <div class="form-group">
                <label>Telinga kiri (6K)</label>
                <input type="number" class="form-control" name="telinga_kiri_enam">
             </div>

             <div class="form-group">
                <label>Telinga kiri (8K)</label>
                <input type="number" class="form-control" name="telinga_kiri_delapan">
             </div>

             <div class="form-group">
                <label>Penilaian</label>
                <input type="text" class="form-control" name="penilaian">
             </div>
             <button class="btn btn-primary" name="simpan">Simpan</button>
             <a href="menu.php?halaman=audiometri" class="btn btn-default">kembali</a>
        </form>
   </div>
</div>