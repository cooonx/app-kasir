<?php
include "config.php";
session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kasir Pintar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="icon.png">
    <link rel="icon" href="icon.ico" type="image/ico">
  <link href="assets/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css"/>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
 
 
  <style>
      .btn-group-xs > .btn, .btn-xs {
  padding: .25rem .4rem;
  font-size: .875rem;
  line-height: .5;
  border-radius: .2rem;
}
.card{
  border: none;
  border-radius: 5px;
  box-shadow: 0 6px 20px rgb(17 26 104 / 10%);
}
.card-header{
  border-radius: 5px 5px 0px 0px !important;
}
.form-control{
  border-radius: 15px;
}
.btn{
  border-radius: 15px;
}
button.buttons-html5{
  padding: .25rem .4rem !important;
  font-size: .875rem !important;
  line-height: .5 !important;
}
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-purple text-white shadow-sm sticky-top d-md-none d-lg-none d-xl-none">
  <a class="navbar-brand"><i class="fa fa-shopping-cart mr-1"></i><b>
  <?php 
      $toko = mysqli_query($conn,"SELECT * FROM login ORDER BY nama_toko ASC");
      while($dat = mysqli_fetch_array($toko)){
        $nama_toko = $dat['nama_toko'];
        echo "$nama_toko";
      }
          ?></b></a>
  <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i>
  </button>
</nav>

<div style="background-color: #0080FF;" class="text-center py-2 shadow-sm sticky-top d-none d-md-block">
<a class="navbar-brand text-white"><i class="fa fa-desktop mr-1"></i><b>
  <?php 
      $toko = mysqli_query($conn,"SELECT * FROM login ORDER BY nama_toko ASC");
      while($dat = mysqli_fetch_array($toko)){
        $nama_toko = $dat['nama_toko'];
        $userr = $dat['user'];
        echo "$nama_toko";
      }
          ?></b></a>
</div>
<br>

<div class="container-fluid">

  <div class="row">
  
    <div class="col-md-3 mb-2 d-none d-md-block">
        <div class="card">
            <div style="background-color: #0080FF;" class="card-header">
                <div class="card-tittle text-white">Hello, <b><?php echo $userr ?></b></div>
            </div>
            <div class="card-body">
              <a class="nav-link" href="index.php"><i class="fa fa-desktop mr-2"></i><b>My Kasir</b></a>
              <a class="nav-link" href="barang.php"><i class="fa fa-shopping-bag mr-2"></i><b>Tambah Barang</b></a>
              <a class="nav-link" href="laporan.php"><i class="fa fa-table mr-2"></i><b>Data Laporan</b></a>
              <a class="nav-link" href="pengaturan.php"><i class="fa fa-cog mr-2"></i><b>Pengaturan</b></a>
              <a class="nav-link" href="logout.php"onclick="javascript:return confirm('Apakah Anda yakin ingin keluar ?');"><i class="fa fa-power-off mr-2"></i><b>Keluar</b></a>
         </div>
    </div>
  </div>