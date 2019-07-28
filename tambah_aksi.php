<?php

// KONEKSI
include 'koneksi.php';

// Mengambil Data dari HTML
$name = $_POST['name'];
$genre = $_POST['genre'];
$developer = $_POST['developer'];
$date = $_POST['date'];

// Input Data
mysqli_query($koneksi, "Insert into games values('','$name','$genre','$developer','$date')");

// Redirect
header("location:index.php");

?>