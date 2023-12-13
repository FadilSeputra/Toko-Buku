<?php
include "koneksi.php";

  // Mengatasi error "Warning: Cannot modify header information"
  ob_start();

  session_start();
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit;
  }
  $login = "SELECT * FROM tb_login";
  $dataUser = mysqli_query($koneksi, $login);
  $user = mysqli_fetch_assoc($dataUser);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Highmedia</title>
</head>
<body>
  <header>
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary  shadow p-3 mb-3 rounded">
      <div class="container">
        <a class="navbar-brand" href="index.php">Highmedia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mx-auto">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="koleksi.php">Collection</a>
            <a class="nav-link">Author</a>
            <a class="nav-link" href="about.php">About us</a>
            </div>
            <div class="profile">
              <a href="logout.php" class="btn align-self-end login"><?php echo $_SESSION['username'] ?></a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section class="jumbotron">
      <div class="container">
        <div class="row">
          <div class="col align-self-center">
        <h1 class="display-4">Selamat Datang di Highmedia</h1>
        <p class="lead">Bersama-sama, mari jelajahi dunia buku dan bersatu dalam kecintaan kita terhadap dunia literasi.</p>
        <a href="#" class="btn btn-primary">Explore Book</a>
          </div>
          <div class="col ilus">
          <img src="assets/buku1.png" width="500px" class="buku">
          </div>
          </div>
        </div>  
      </div>
    </section>

    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="assets/catatan.png" width="240px" class="animasi">
          </div>
          <div class="col-md">
            <h1 class="text-center">Kritik dan Saran</h1>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInputDisabled">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <textarea class="form-control" placeholder="Address" id="floatingTextareaDisabled"></textarea>
              <label for="floatingTextareaDisabled">Alamat Anda</label>
            </div>
            <div class="form-floating mb-3">
              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2Disabled" style="height: 100px"></textarea>
              <label for="floatingTextarea2Disabled">Comments</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="bg-light text-center py-4">
    <div class="container">
      <p>Hak Cipta &copy; 2023 Highmedia. All rights reserved.</p>
    </div>
  </footer>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
