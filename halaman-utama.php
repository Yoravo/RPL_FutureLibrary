<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: halaman-login.html");
  exit();
}

$username = $_SESSION['username'];

// Ambil data pengguna dari database menggunakan koneksi.php
require 'koneksi.php';

// Query untuk mengambil username pengguna berdasarkan username yang disimpan dalam sesi
$query = "SELECT username FROM data_user WHERE username = '{$_SESSION['username']}'";
$result = mysqli_query($conn, $query);

if ($result) {
  $row = mysqli_fetch_assoc($result);
  $username = $row['username'];
} else {
  // Jika query gagal, redirect ke halaman login
  header("Location: halaman-login.html");
  exit();
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Halaman Utama</title>
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Hina+Mincho%3A400"
  />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400"
  />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" />
  <style>
    body {
    background-image: url("assets/perpus.png");
    background-size: cover;
    background-position: center;
    background-color: rgba(255, 255, 255, 0.5);
  }


    .navbar {
      background-color: rgba(0, 0, 0, 0.5);
    }

    .navbar-text {
      color: #fff;
    }
    
    .content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      background-color: rgba(255, 255, 255, 0.5);
      border-radius: 10px;
      padding: 100px;
      width: 80%;
      max-width: 800px;
    }

    .content h1 {
      font-size: 48px;
      font-weight: bold;
      color: #000;
      margin-bottom: 20px;
    }

    .content p {
      font-size: 24px;
      color: #000;
      margin-bottom: 30px;
    }

    .content button {
      font-size: 18px;
      font-weight: bold;
      padding: 10px 30px;
    }
    
    .tab-content {
      display: none;
      padding: 20px;
    }

    .tab-content.active {
      display: block;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="halaman-utama.php">FUTURE LIBRARY</a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#books">Books</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about-us">About Us</a>
        </li>
      </ul>
    </div>
    <div class="navbar-nav">
      <span class="navbar-text">
        Welcome, <?php echo $username; ?>
      </span>
      <button class="btn btn-light ms-2" onclick="location.href='logout.php'">Logout</button>
    </div>
  </div>
</nav>

<div class="content">
  <div id="home" class="tab-content active">
    <h1>FUTURE LIBRARY</h1>
    <p>Study, Read, and Explore!!</p>
    <a href="halaman-search.html" class="btn btn-primary bg-danger">Get Started</a>
  </div>
  <div id="books" class="tab-content">
    <h1>Books</h1>
    <ul>
      <li>Book 1</li>
      <li>Book 2</li>
      <li>Book 3</li>
    </ul>
  </div>
  <div id="about-us" class="tab-content">
    <h1>About Us</h1>
    <p>Lorem ipsum dolor .</p>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const tabs = document.querySelectorAll('.nav-link');
  const tabContents = document.querySelectorAll('.tab-content');

  tabs.forEach((tab, index) => {
    tab.addEventListener('click', (e) => {
      e.preventDefault();
      removeActiveClass();
      tab.classList.add('active');
      tabContents.forEach((content) => {
        content.classList.remove('active');
      });
      tabContents[index].classList.add('active');
    });
  });

  function removeActiveClass() {
    tabs.forEach((tab) => {
      tab.classList.remove('active');
    });
  }
</script>
</body>
</html>
