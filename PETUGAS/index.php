<?php
session_start();
include"../koneksi/koneksi.php";

$user=$_SESSION['NamaUser'];
if($_SESSION['NamaUser']==""){
  header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <script src="../assets/jquery.min.js"></script>
    <script src="../assets/bootstrap.min.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 640px}
        
        
        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }
          
/* On small screens, set height to 'auto' for the grid */
@media screen and (max-width: 767px) {
        .row.content {height: auto;} 
        }
    </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2> <?php echo $_SESSION['Level'] ?></h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="index.php">Dashboard</a></li>
        <li><a href="?page=stok">Stok</a></li>
        <li><a href="?page=user">User</a></li>
        <li><a href="logout.php">Log Out</a></li>
      </ul> <br>
    </div>
    <br>
    
    <div class="col-sm-9">
    <?php
            if (isset($_GET['page'])) {
                $laman = $_GET['page'];

                switch ($laman) {
                    case 'user':
                        include "user.php";
                        break;

                    case 'stok':
                        include "stok-barang.php";
                        break;

                    case 'logout':
                        include "logout.php";
                        break;
                
                    case 'tambah stok':
                        include "tambah stok.php";
                        break;

                    case 'cari-menu':
                        include "cari-menu.php";
                        break;


                    case 'hapusstok':
                        include "hapusstok.php";
                        break;

                    case 'tambah-user':
                        include "tambah user.php";
                        break;
                     case 'hapus-user':
                        include "hapus-user.php";
                        break;

                    case 'edit-user';
                        include "edit-user.php";
                        break;
                    case 'edit-stok';
                        include "edit-stok.php";
                        break;

                    default:
                    # code...
                    break;
                     }
                    }
                    else{
                        include "dashboard.php";
                    }
                ?>
                </div>
            </div>
        </div>
                
                </body>
                </html>

