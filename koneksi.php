<?php
// konfigurasi database
$host       =   "localhost";
$user       =   "root";
$password   =   "";
$database   =   "fmipa2";
// perintah php untuk akses ke database
$conn = mysqli_connect($host, $user, $password, $database) or die("Koneksi Gagal");
?>