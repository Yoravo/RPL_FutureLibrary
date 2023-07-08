<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $namaLengkap = $_POST["namaLengkap"];
    $email = $_POST["email"];
    $jenisKelamin = $_POST["jenisKelamin"];
    $password = $_POST["password"];

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query_sql = "INSERT INTO data_user (username, namaLengkap, email, jenisKelamin, password)
                    VALUES ('$username', '$namaLengkap', '$email', '$jenisKelamin', '$hashedPassword')";

    if (mysqli_query($conn, $query_sql)) {
        header("Location: index.html");
    } else {
        echo "Pendaftaran Gagal: " . mysqli_error($conn);
    }
}
?>
