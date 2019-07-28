<?php 

// KONEKSI ke DATABASE
include 'koneksi.php';

// MENGAMBIL DATA dari HTML
$id = $_GET['id'];

// PROSES MENGHAPUS
mysqli_query($koneksi, "delete from games where id='$id'");

// Redirect
header("location:index.php");

?>