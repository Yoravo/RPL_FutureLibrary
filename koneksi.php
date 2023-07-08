<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "perpustakaan_rpl";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn){
    die("<script>alert('Gagal Koneksi')</script>". mysqli_connect_error());
}else{
    
}