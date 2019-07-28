<?php

// KONEKSI ke DATABASE
include 'koneksi.php';

// MENGAMBIL DATA dari HTML
$id = $_POST['id'];
$name = $_POST['name'];
$genre = $_POST['genre'];
$developer = $_POST['developer'];
$date = $_POST['date'];

// UPDATE DATA ke DATABASE
mysqli_query($koneksi, "update games set name='$name', genre='$genre', developer='$developer', release_date='$date' where id='$id'");

//Redirect
header("location:index.php");

?>