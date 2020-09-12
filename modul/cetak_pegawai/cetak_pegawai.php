<h2></h2>
 <div class="panel panel-primary">
    <div class="panel-heading">
       <strong>cetak pegawai perusahaan</strong>  
    </div>
  <div class="panel-body">

        <form  method="GET" action="laporan/cetak_pegawai_perusahaan.php" target="_blank">
             
            <div class="form-group">
                <label>Nama Perusahaan</label>
                <select type="number" name="nama_perusahaan" class="form-control" id="nama_perusahaan">
                <?php $ambil1 = $koneksi->query("SELECT * FROM perusahaan"); ?>
                    <option>--pilih--</option>
                <?php while($pecah1 = $ambil1->fetch_assoc()) : ?>
                    <option value="<?= $pecah1['id_perusahaan']; ?>"><?php echo $pecah1['nama_perusahaan']; ?></option>
                <?php endwhile; ?>	
                </select>
            </div>

             <div class="form-group">
                <label>Nama Pegawai</label>
                <select name="nama" class="form-control" id="nama" required="">
                    <option value="">--pilih--</option>
                </select>
            </div>

            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="mulai_uji" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary"><span class="fa fa-print"></span>cetak data</button>
        </form>
        
   </div>
</div>