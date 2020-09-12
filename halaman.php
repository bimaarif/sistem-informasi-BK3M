<?php 

if ($_SESSION['level_user']=="admin") {
                if ($_GET['halaman'] == "pemberitahuan")
                {
                  include"modul/pemberitahuan/pemberitahuan.php";
                }

             
                if ($_GET['halaman'] == "pengguna")
                {
                  include"modul/tambah_pengguna/pengguna.php";
                }
                if ($_GET['halaman'] == "tambah_pengguna")
                {
                  include"modul/tambah_pengguna/tambah_pengguna.php";
                }
                if ($_GET['halaman'] == "ubah_pengguna")
                {
                  include"modul/tambah_pengguna/ubah_pengguna.php";
                }
                if ($_GET['halaman'] == "hapus_pengguna")
                {
                  include"modul/tambah_pengguna/hapus_pengguna.php";
                }


                if ($_GET['halaman'] == "manajer_teknis")
                {
                  include"modul/manajer_teknis/manajer.php";
                }
                if ($_GET['halaman'] == "tambah_manajer")
                {
                  include"modul/manajer_teknis/tambah_manajer.php";
                }
                if ($_GET['halaman'] == "ubah_manajer")
                {
                  include"modul/manajer_teknis/ubah_manajer.php";
                }
                if ($_GET['halaman'] == "hapus_manajer")
                {
                  include"modul/manajer_teknis/hapus_manajer.php";
                }



                if ($_GET['halaman'] == "petugas")
                {
                  include"modul/petugas/petugas.php";
                }
                if ($_GET['halaman'] == "tambah_petugas")
                {
                  include"modul/petugas/tambah_petugas.php";
                }
                if ($_GET['halaman'] == "ubah_petugas")
                {
                  include"modul/petugas/ubah_petugas.php";
                }
                if ($_GET['halaman'] == "hapus_petugas")
                {
                  include"modul/petugas/hapus_petugas.php";
                }


                
                if($_GET['halaman'] == "perusahaan")
                {
                  include "modul/perusahaan/perusahaan.php";
                }
                if ($_GET['halaman'] == "tambahperusahaan") 
                {
                  include "modul/perusahaan/tambahperusahaan.php";
                }
                if ($_GET['halaman'] == "ubahperusahaan") 
                {
                  include "modul/perusahaan/ubahperusahaan.php";
                }
                if ($_GET['halaman'] == "hapusperusahaan") 
                {
                  include "modul/perusahaan/hapusperusahaan.php";
                }

                
                if($_GET['halaman'] =="pegawai_perusahaan")
                {
                  include "modul/pegawai_perusahaan/pegawai_perusahaan.php";
                }
                if ($_GET['halaman'] == "tambahpegawai_perusahaan")
                {
                  include 'modul/pegawai_perusahaan/tambahpegawai_perusahaan.php';
                }
                if ($_GET['halaman'] == "hapuspegawai_perusahaan")
                {
                  include'modul/pegawai_perusahaan/hapuspegawai_perusahaan.php';
                }
                if ($_GET['halaman'] == "ubahpegawai_perusahaan")
                {
                  include 'modul/pegawai_perusahaan/ubahpegawai_perusahaan.php';
                }



                if($_GET['halaman'] =="pb_dalam_darah")
                {
                  include "modul/pb_dalam_darah/pb_dalam_darah.php";
                }
                if($_GET['halaman'] =="tambahpb_dalam_darah")
                {
                  include "modul/pb_dalam_darah/tambahpb_dalam_darah.php";
                }
                if($_GET['halaman'] =="ubahpb_dalam_darah")
                {
                  include "modul/pb_dalam_darah/ubahpb_dalam_darah.php";
                }
                if($_GET['halaman'] =="hapuspb_dalam_darah")
                {
                  include "modul/pb_dalam_darah/hapuspb_dalam_darah.php";
                }
                if($_GET['halaman'] =="cetakpb_dalam_darah")
                {
                  include "modul/pb_dalam_darah/cetakpb.php";
                }
               


                if($_GET['halaman'] =="cholinesterase")
                {
                  include "modul/cholinesterase/cholinesterase.php";
                }
                if($_GET['halaman'] =="tambah_cholinesterase")
                {
                  include "modul/cholinesterase/tambah_cholinesterase.php";
                }
                if($_GET['halaman'] =="ubah_cholinesterase")
                {
                  include "modul/cholinesterase/ubah_cholinesterase.php";
                }
                if($_GET['halaman'] =="hapus_cholinesterase")
                {
                  include "modul/cholinesterase/hapus_cholinesterase.php";
                }
                if($_GET['halaman'] =="cetak_cholinesterase")
                {
                  include "modul/cholinesterase/cetak_ch.php";
                }


                 if($_GET['halaman'] =="spirometri")
                {
                  include "modul/spirometri/spirometri.php";
                }
                if($_GET['halaman'] =="tambah_spirometri")
                {
                  include "modul/spirometri/tambah_spirometri.php";
                }
                if($_GET['halaman'] =="ubah_spirometri")
                {
                  include "modul/spirometri/ubah_spirometri.php";
                }
                if($_GET['halaman'] =="hapus_spirometri")
                {
                  include "modul/spirometri/hapus_spirometri.php";
                }
                if($_GET['halaman'] =="cetak_spirometri")
                {
                  include "modul/spirometri/cetak_sp.php";
                }


                 if($_GET['halaman'] =="audiometri")
                {
                  include "modul/audiometri/audiometri.php";
                }
                if($_GET['halaman'] =="tambah_audiometri")
                {
                  include "modul/audiometri/tambah_audiometri.php";
                }
                if($_GET['halaman'] =="ubah_audiometri")
                {
                  include "modul/audiometri/ubah_audiometri.php";
                }
                if($_GET['halaman'] =="hapus_audiometri")
                {
                  include "modul/audiometri/hapus_audiometri.php";
                }
                if($_GET['halaman'] =="cetak_audiometri")
                {
                  include "modul/audiometri/cetak_au.php";
                }


                if ($_GET['halaman'] == "cetak_pegawai")
                {
                  include"modul/cetak_pegawai/cetak_pegawai.php";
                }
               

}


if ($_SESSION['level_user']=='staff'){
  if($_GET['halaman']=="pemberitahuan_staff")
  {
     include "modul/pemberitahuan_staff/pemberitahuan_staff.php";
  }


  if($_GET['halaman'] =="pb_dalam_darah")
  {
    include "modul/pb_dalam_darah/pb_dalam_darah.php";
  }
  if($_GET['halaman'] =="cetakpb_dalam_darah")
  {
    include "modul/pb_dalam_darah/cetakpb.php";
  }



  if($_GET['halaman'] =="cholinesterase")
  {
    include "modul/cholinesterase/cholinesterase.php";
  }
  if($_GET['halaman'] =="cetak_cholinesterase")
  {
    include "modul/cholinesterase/cetak_ch.php";
  }



   if($_GET['halaman'] =="spirometri")
  {
    include "modul/spirometri/spirometri.php";
  }
  if($_GET['halaman'] =="cetak_spirometri")
  {
    include "modul/spirometri/cetak_sp.php";
  }



   if($_GET['halaman'] =="audiometri")
  {
    include "modul/audiometri/audiometri.php";
  }
  if($_GET['halaman'] =="cetak_audiometri")
  {
    include "modul/audiometri/cetak_au.php";
  }

  if ($_GET['halaman'] == "cetak_pegawai")
  {
    include"modul/cetak_pegawai/cetak_pegawai.php";
  }

}



if ($_SESSION['level_user']=='kepala'){
  if($_GET['halaman']=="pemberitahuan_kepala")
  {
     include "modul/pemberitahuan_staff/pemberitahuan_kepala.php";
  }


  if($_GET['halaman'] =="pb_dalam_darah")
  {
    include "modul/pb_dalam_darah/pb_dalam_darah.php";
  }
  if($_GET['halaman'] =="cetakpb_dalam_darah")
  {
    include "modul/pb_dalam_darah/cetakpb.php";
  }



  if($_GET['halaman'] =="cholinesterase")
  {
    include "modul/cholinesterase/cholinesterase.php";
  }
  if($_GET['halaman'] =="cetak_cholinesterase")
  {
    include "modul/cholinesterase/cetak_ch.php";
  }



   if($_GET['halaman'] =="spirometri")
  {
    include "modul/spirometri/spirometri.php";
  }
  if($_GET['halaman'] =="cetak_spirometri")
  {
    include "modul/spirometri/cetak_sp.php";
  }



   if($_GET['halaman'] =="audiometri")
  {
    include "modul/audiometri/audiometri.php";
  }
  if($_GET['halaman'] =="cetak_audiometri")
  {
    include "modul/audiometri/cetak_au.php";
  }

  if ($_GET['halaman'] == "cetak_pegawai")
  {
    include"modul/cetak_pegawai/cetak_pegawai.php";
  }

}



?>