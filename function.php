<?php 


include 'config/koneksi.php';


function anti_injection($data){
      
  global $koneksi;
  $filter = mysqli_real_escape_string($koneksi,stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter;
  
}


function cari_pb($nama_perusahaan,$mulai_uji){

   global $koneksi;

   $ambil = $koneksi->query("SELECT * FROM pb_dalam_darah 
     JOIN perusahaan ON pb_dalam_darah.id_perusahaan = perusahaan.id_perusahaan 
     JOIN pegawai_perusahaan ON pb_dalam_darah.id_pegawai = pegawai_perusahaan.id_pegawai
     JOIN manajer_teknis ON pb_dalam_darah.id_manajer = manajer_teknis.id_manajer
     JOIN petugas ON pb_dalam_darah.id_petugas = petugas.id_petugas
     WHERE 
     nama_perusahaan LIKE '%$nama_perusahaan%' OR
     mulai_uji LIKE '%$mulai_uji%'");

   return $ambil;

}

function cari_ch($nama_perusahaan,$mulai_uji){

   global $koneksi;

   $ambil = $koneksi->query("SELECT * FROM cholinesterase 
        JOIN perusahaan ON cholinesterase.id_perusahaan = perusahaan.id_perusahaan 
        JOIN pegawai_perusahaan ON cholinesterase.id_pegawai =pegawai_perusahaan.id_pegawai
        JOIN manajer_teknis ON cholinesterase.id_manajer = manajer_teknis.id_manajer
        JOIN petugas ON cholinesterase.id_petugas = petugas.id_petugas
        WHERE 
        nama_perusahaan LIKE '%$nama_perusahaan%' OR
        mulai_uji LIKE '%$mulai_uji%'");

   return $ambil;

}

function cari_sp($nama_perusahaan,$mulai_uji){

   global $koneksi;

   $ambil = $koneksi->query("SELECT * FROM spirometri 
         JOIN perusahaan ON spirometri.id_perusahaan = perusahaan.id_perusahaan 
         JOIN pegawai_perusahaan ON spirometri.id_pegawai =pegawai_perusahaan.id_pegawai
         JOIN manajer_teknis ON spirometri.id_manajer = manajer_teknis.id_manajer
         JOIN petugas ON spirometri.id_petugas = petugas.id_petugas
         WHERE 
         nama_perusahaan LIKE '%$nama_perusahaan%' OR
         mulai_uji LIKE '%$mulai_uji%'");

   return $ambil;

}

function cari_au($nama_perusahaan,$mulai_uji){

   global $koneksi;

   $ambil = $koneksi->query("SELECT * FROM audiometri 
        JOIN perusahaan ON audiometri.id_perusahaan = perusahaan.id_perusahaan 
        JOIN pegawai_perusahaan ON audiometri.id_pegawai = pegawai_perusahaan.id_pegawai
        JOIN manajer_teknis ON audiometri.id_manajer = manajer_teknis.id_manajer
        JOIN petugas ON audiometri.id_petugas = petugas.id_petugas
        WHERE 
        nama_perusahaan LIKE '%$nama_perusahaan%' OR
        mulai_uji LIKE '%$mulai_uji%'");

   return $ambil;

}



