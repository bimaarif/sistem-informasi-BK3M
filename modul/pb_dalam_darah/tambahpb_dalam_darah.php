<h2></h2>

<?php 

    if (isset($_POST['simpan'])) {
    	$koneksi->query("INSERT INTO pb_dalam_darah
    	(id_perusahaan,id_pegawai,mulai_uji,akhir_uji,alat_ukur,id_manajer,id_petugas,hasil,keterangan)
    	VALUES('$_POST[nama_perusahaan]',
               '$_POST[nama]',
               '$_POST[mulai_uji]',
               '$_POST[akhir_uji]',
               '$_POST[alat_ukur]',
               '$_POST[nama_manajer]',
               '$_POST[nama_petugas]',
               '$_POST[hasil]',
               '$_POST[keterangan]')");

        echo "<div class='alert alert-info'>data tersimpan</div>";	
        echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=pb_dalam_darah'>";
    }

 ?>
 <div class="panel panel-primary">
    <div class="panel-heading">
       <strong>Input Pb Dalam Darah</strong>  
    </div>
  <div class="panel-body">

        <form  method="POST" enctype="multipart/form-data">
             
            <div class="form-group">
                <label>Nama Perusahaan</label>
                <?php $ambil1 = $koneksi->query("SELECT * FROM perusahaan"); ?>
                  <select name="nama_perusahaan" class="form-control" id="nama_perusahaan">
                    <option>--pilih--</option>
                <?php 
                while($pecah1 = $ambil1->fetch_assoc()) {
                     
                    echo "<option value='$pecah1[id_perusahaan]'>$pecah1[nama_perusahaan]</option>"; 

                } 
                ?>
    
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
                    <option>Lead care II Analyzer</option>  
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
                <label>Hasil</label>
                <input type="text" class="form-control" name="hasil">
             </div>

             <div class="form-group">
                <label>Keterangan</label>
                <input type="text" class="form-control" name="keterangan">
             </div>
             <button class="btn btn-primary" name="simpan">Simpan</button>
             <a href="menu.php?halaman=pb_dalam_darah" class="btn btn-default">kembali</a>
        </form>
   </div>
</div>