<?php

$koneksi = mysqli_connect("localhost","root","","16_crud");

// Mengecek Koneksi

if (mysqli_connect_errno()){
    echo "Koneksi ke Database Gagal : " . mysqli_connect_error();
}

?>