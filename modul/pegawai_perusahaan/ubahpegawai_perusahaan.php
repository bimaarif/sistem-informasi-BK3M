<h2></h2>
<?php 


 $ambil = $koneksi->query("SELECT * FROM pegawai_perusahaan WHERE id_pegawai='$_GET[id_pegawai]'");
 $pecah = $ambil->fetch_assoc();

 $id_pegawai = $_GET['id_pegawai'];
?>

<div class="panel panel-primary">
    <div class="panel-heading">
       <strong>Ubah data Pegawai Perusahaan</strong>  
    </div>
<div class="panel-body">

<form  method="POST" enctype="multipart/form-data">
     <div class="form-group">
        <label>Nama Perusahaan</label>
        <select name="nama_perusahaan" class="form-control">
          <?php $ambil1 = $koneksi->query("SELECT * FROM perusahaan JOIN pegawai_perusahaan ON perusahaan.id_perusahaan=pegawai_perusahaan.id_perusahaan  WHERE id_pegawai='$_GET[id_pegawai]'"); ?>
          
          <?php while($pecah1 = $ambil1->fetch_assoc()) : ?>
            <option value="<?= $pecah1['id_perusahaan']; ?>"><?php echo $pecah1['nama_perusahaan']; ?></option>
          <?php endwhile; ?>
        </select>
     </div>
     
     <div class="form-group">
        <label>nama pegawai</label>
        <input type="text" class="form-control" name="nama" value="<?=  $pecah['nama']; ?>">
     </div>

     <div class="form-group">
        <label>Jenis kelamin</label>
          <select name="jenis_kelamin" class="form-control">
            <option><?= $pecah['jenis_kelamin'];  ?></option>
             <option>L</option>
            <option>P</option>  
          </select>
     </div>

     <div class="form-group">
        <label>usia</label>
        <input type="text" class="form-control" name="usia" value="<?= $pecah['usia']; ?>">
     </div>

     <div class="form-group">
        <label>Masa Keja</label>
        <input type="text" class="form-control" name="masa_kerja" value="<?= $pecah['masa_kerja'] ?>">
     </div>

     <div class="form-group">
        <label>Contact Person</label>
        <input type="text" class="form-control" name="contact_person" value="<?= $pecah['contact_person']; ?>">
     </div>

     <div class="form-group">
        <label>Bagian</label>
        <input type="text" class="form-control" name="bagian" value="<?= $pecah['bagian']; ?>">
     </div>
     <button class="btn btn-primary" name="ubah">Simpan</button>
     <a href="menu.php?halaman=pegawai_perusahaan" class="btn btn-default">kembali</a>
</form>
</div>
</div>
<?php 

if (isset($_POST['ubah'])){
   $koneksi->query("UPDATE pegawai_perusahaan SET nama_perusahaan='$_POST[nama_perusahaan]',
						   	nama='$_POST[nama]',
						   	jenis_kelamin='$_POST[jenis_kelamin]',
						   	usia='$_POST[usia]',
						   	masa_kerja='$_POST[masa_kerja]',
						   	contact_person='$_POST[contact_person]',
                            bagian='$_POST[bagian]' 
						   	WHERE id_pegawai='$_GET[id_pegawai]'");


   echo "<script>alert('data sudah diubah');</script>";
   echo "<script>location='menu.php?halaman=pegawai_perusahaan'</script>";	
}
