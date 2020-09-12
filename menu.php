<?php include 'config/koneksi.php'; ?>
<?php include 'function.php'; ?>
<?php 
    error_reporting(0);
    session_start();


    $time = time(); 
	
if (!isset($_SESSION['level_user'])) {
       echo "<script>alert('anda harus login');</script>";
       echo "<script>location='index.php';</script>";
       header('location:index.php');
       exit();
   }

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    
	  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><?php echo $_SESSION['level']; ?></a> 
            </div>
            <div style="color: white;
            padding: 15px 50px 5px 50px;
              float: left;
          font-size: 16px;">
              
            </div>
    
          <div style="color: white;
            padding: 15px 50px 5px 50px;
              float: right;
          font-size: 16px;">Date : <?php echo date('d/m/y',$time); ?> &nbsp;&nbsp;nama pengguna:&nbsp;<?php echo $_SESSION['username']; ?>&nbsp;&nbsp;<a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> 
          </div>
        </nav>   



        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side navbar-fixed-side" role="navigation">
            <div class="sidebar-collapse">
            <?php 
                
                if($_SESSION['level_user'] =='admin') :

            ?>
              <ul class="nav" id="main-menu">
				         
				
					
                <li>
                  <a href="?halaman=pemberitahuan"><i class="fa fa-dashboard"></i>Dashboard</a>
                </li>
                <li>
                   <a href="?halaman=pengguna"><i class="fa fa-user"></i>pengguna</a>
                </li>
                <li>
                   <a href="?halaman=manajer_teknis"><i class="fa fa-user"></i>manajer teknis</a>
                </li>
                <li>
                   <a href="?halaman=petugas"><i class="fa fa-user"></i>petugas</a>
                </li>
                <li>
                   <a href="?halaman=perusahaan"><i class="fa fa-file"></i>perusahaan</a>
                </li>
                <li>
                   <a href="?halaman=pegawai_perusahaan"><i class="fa fa-user"></i>pegawai</a>
                </li>
                <li>
                   <a href="?halaman=pb_dalam_darah"><i class="glyphicon glyphicon-list-alt"></i>Pb dalam darah <span></span></a>
                </li>
                <li>
                   <a href="?halaman=cholinesterase"><i class="glyphicon glyphicon-list-alt"></i>cholinesterase <span></span></a>
                </li>
                <li>
                   <a href="?halaman=spirometri"><i class="glyphicon glyphicon-list-alt"></i>spirometri<span></span></a>
                </li>
                <li>
                   <a href="?halaman=audiometri"><i class="glyphicon glyphicon-list-alt"></i>audiometri<span></span></a>
                </li> 
                <li>
                   <a href="?halaman=cetak_pegawai"><i class="fa fa-cube"></i>cetak pegawai</a>
                </li>                   
                <li>
                  <a href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a>
                </li>	
              </ul>

            <?php endif;  ?>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->


          <?php if($_SESSION['level_user'] =='staff') :?>
          <ul class="nav" id="main-menu"> 
            <li>
              <a href="?halaman=pemberitahuan_staff"><i class="glyphicon glyphicon-home "></i>pemberitahuan</a>
            </li>
            <li>
              <a href="?halaman=pb_dalam_darah"><i class="glyphicon glyphicon-list-alt"></i>Pb dalam darah <span></span></a>
            </li>
            <li>
              <a href="?halaman=cholinesterase"><i class="glyphicon glyphicon-list-alt"></i>cholinesterase <span></span></a>
            </li>
            <li>
               <a href="?halaman=spirometri"><i class="glyphicon glyphicon-list-alt"></i>spirometri<span></span></a>
            </li>
            <li>
               <a href="?halaman=audiometri"><i class="glyphicon glyphicon-list-alt"></i>audiometri<span></span></a>
            </li> 
            <li>
               <a href="?halaman=cetak_pegawai"><i class="glyphicon glyphicon-user"></i>cetak pegawai</a>
            </li>
            <li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
          </ul>
          <?php endif; ?>

    <!-- //////////////////////////////////////////////////////////////////////////////////// -->

         <?php if($_SESSION['level_user'] =='kepala') :?>
          <ul class="nav" id="main-menu"> 
            <li>
              <a href="?halaman=pemberitahuan_kepala"><i class="glyphicon glyphicon-home "></i>pemberitahuan</a>
            </li>
            <li>
              <a href="?halaman=pb_dalam_darah"><i class="glyphicon glyphicon-list-alt"></i>Pb dalam darah <span></span></a>
            </li>
            <li>
              <a href="?halaman=cholinesterase"><i class="glyphicon glyphicon-list-alt"></i>cholinesterase <span></span></a>
            </li>
            <li>
               <a href="?halaman=spirometri"><i class="glyphicon glyphicon-list-alt"></i>spirometri<span></span></a>
            </li>
            <li>
               <a href="?halaman=audiometri"><i class="glyphicon glyphicon-list-alt"></i>audiometri<span></span></a>
            </li> 
            <li>
               <a href="?halaman=cetak_pegawai"><i class="glyphicon glyphicon-user"></i>cetak pegawai</a>
            </li>
            <li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
          </ul>
          <?php endif; ?>



          </div>
        </nav>  
            
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
    
              
            <?php 
           
              include 'halaman.php';

            ?>
              

            </div>
             <!-- /. PAGE INNER  -->
            <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Back End by <a href="#"></a> &copy; <span id="year-cred"></span></p>
            </div>
            <div class="col-sm-6 text-right">
              <p> <a href="#" class="external">Bootstrapious</a></p>
            </div>
          </div>
        </div>
      </footer> 
            </div>
         <!-- /. PAGE WRAPPER  -->
    </div>
     <!-- /. WRAPPER  -->

   


    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
     <script>
        $(document).ready(function(){
            $('#nama_perusahaan').change(function(){
               var id_perusahaan = $(this).val();

               $.ajax({
                   type: 'POST', //method
                   url: 'pegawai.php', //action
                   data:'id_perusahaan='+id_perusahaan,
                   success: function(response){
                      $('#nama').html(response);
                   }
               });
            })
        });
    </script> 
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>

    <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
                $("#tgl").datepicker({dateFormat : 'yy/mm/dd'});
            });
        </script>

         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script src="warning.js"></script>
   
</body>
</html>
