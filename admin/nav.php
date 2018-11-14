<?php
session_start(); //memulai session
if (!isset($_SESSION['nama_u'])) //jika session nama tidak ada
{
  header('location:./../' . $_SESSION['akses']); //alihkan halaman
  exit();
} else { //jika ada session
  $nama = $_SESSION['nama_u']; //menyimpan session nama ke variabel $nama
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="icon" href="../img/logoo.png">
  <!-- Bootstrap -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/dataTables.bootstrap.min.css">
  
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/datatables.min.js"></script>
  
  <style>
.navbar-default {
  background-color: #035390;
  border-color: #07416d;
}
.navbar-default .navbar-brand {
  color: #ecf0f1;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #f2f1f4;
}
.navbar-default .navbar-text {
  color: #ecf0f1;
}
.navbar-default .navbar-nav > li > a {
  color: #ecf0f1;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #f2f1f4;
}
.navbar-default .navbar-nav > li > .dropdown-menu {
  background-color: #035390;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li > a {
  color: #ecf0f1;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li > a:hover,
.navbar-default .navbar-nav > li > .dropdown-menu > li > a:focus {
  color: #f2f1f4;
  background-color: #07416d;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li.divider {
  background-color: #07416d;
}
.navbar-default .navbar-nav .open .dropdown-menu > .active > a,
.navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
.navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
  color: #f2f1f4;
  background-color: #07416d;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #f2f1f4;
  background-color: #07416d;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #f2f1f4;
  background-color: #07416d;
}
.navbar-default .navbar-toggle {
  border-color: #07416d;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #07416d;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #ecf0f1;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #ecf0f1;
}
.navbar-default .navbar-link {
  color: #ecf0f1;
}
.navbar-default .navbar-link:hover {
  color: #f2f1f4;
}

@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #ecf0f1;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #f2f1f4;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #f2f1f4;
    background-color: #07416d;
  }
}
.navbar-brand>img {
            max-height: auto;
            height: 150%;
            width: auto;
            margin: -5px;
            padding-bottom: auto;
        }
        body { 
            margin-top: 100px;
            margin-bottom: 120px;
        }
  </style>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
   <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="../img/logo.png"></a>
        </div>
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              
              <li class="dropdown">
                <a href="#"class="dropdown-toggle" data-toggle="dropdown" ><strong> Master</strong> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="barang.php">Data Barang</a></li>
                    <li><a href="pelanggan.php">Data Pelanggan</a></li>
                    <li><a href="user.php">Data User</a></li>
                </ul>
              </li>

   
                <li class="dropdown">
                  <a href="#"class="dropdown-toggle" data-toggle="dropdown" ><strong> Transaksi</strong> <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="listPenjualan.php">Detail Penjualan</a></li>
                    <li><a href="transPenjualan.php">Transaksi Penjualan</a></li>
                    <li><a href="pengiriman.php">Pengiriman</a></li>
                  </ul>
                </li>


              <li class="dropdown">
                  <a href="#"class="dropdown-toggle" data-toggle="dropdown" ><strong> Laporan</strong> <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="lap_penjualan.php">Laporan Penjualan</a></li>
                    <li><a href="lap_pembelian.php">Laporan Pembelian</a></li>
                    <li><a href="lap_persediaan.php">Laporan Persediaan Barang</a></li>
                  </ul>
                </li>
              

                <li class="dropdown">
                  <a href="#"class="dropdown-toggle" data-toggle="dropdown" ><strong> Lainnya</strong> <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="tambah_user.php">Tambah User</a></li>
                    <li role="separator" class="divider"></li>
                    <li class=""><a href="../logout.php" onclick="return confirm('Yakin ingin Logout?')"><span class="glyphicon glyphicon-off"></span> Keluar (<b> <?php echo $nama; ?> </b>)</a></li>
                  </ul>
                </li>
              </ul>

              </div>
             </div>
      </div>
</nav>