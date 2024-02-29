<?php
// include database connection file
include_once("../koneksi/koneksi.php");
 
// Get id from URL to delete that user
$id = $_GET['id_produk'];
 
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php?page=stok");
?>

