<?php 
    error_reporting(0);
    include 'config/koneksi.php';
    include 'function.php';

    $username = anti_injection($_POST['username']);
    $password = anti_injection($_POST['password']);

    $ambil = $koneksi->query("SELECT * FROM tabel_user WHERE username='$username' AND 
    	                                                 password='$password'");
    $yangcocok = $ambil->num_rows;
    $pecah = $ambil->fetch_assoc();

    if ($yangcocok > 0){
      	session_start();
      	$_SESSION[user_id] = $pecah[id_user];
        $_SESSION[username] = $pecah[username];
      	$_SESSION[password] = $pecah[password];
      	$_SESSION[level_user] = $pecah[level_user];

      	if ($_SESSION[level_user]=="admin"){
      		echo "<script>location='menu.php?halaman=pemberitahuan';</script>";
      	}elseif ($_SESSION[level_user]=="staff"){
      		echo "<script>location='menu.php?halaman=pemberitahuan_staff';</script>";
      	}elseif ($_SESSION[level_user]=="kepala"){
          echo "<script>location='menu.php?halaman=pemberitahuan_kepala';</script>";
        }

    }else{
    	echo "<script>alert('login gagal, username dan password salah ');</script>";
    	echo "<script>location='index.php';</script>";
    }  

 ?>