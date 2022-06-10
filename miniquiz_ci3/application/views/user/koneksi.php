<?php 
$namaServer = "localhost";
$username = "root";
$password = "";
$namaDatabase = "miniquiz_ci3";

// Membuat koneksi
$conn = mysqli_connect($namaServer,$username,$password,$namaDatabase);

// Cek koneksi
if(!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());

}
