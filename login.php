<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query_sql = "SELECT password FROM data_user WHERE username = '$username'";
    $result = mysqli_query($conn, $query_sql);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $hashedPassword = $row['password'];

        if (password_verify($password, $hashedPassword)) {
            // Password valid, login berhasil
            session_start();
            $_SESSION['username'] = $username;
            header("Location: halaman-utama.php");
            exit();
        }
    }

    // Username atau password salah, kembali ke halaman login
    echo "<script>alert('Username atau password salah.')</script>";
    echo "<script>window.location.href='index.html';</script>";
    exit();
}
?>
