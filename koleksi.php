<?php 
require 'koneksi.php';
session_start();
// $card_buku = query("SELECT * FROM card_buku")
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
      <div class="container same">
        <div class="row">
          <div class="col build">
        <h3 class="display-4 ganti fw-semibold">Build Your Library</h3>
        <p class="lead">Buy two selected books and get one for free</p>
        <a href="#" class="btn explore fw-semibold">Explore Book</a>
        </div> 
        <div class="col bocil1">
        <img src="assets/bocil.png" width="300px" class="bocil">
        </div>
      </div>
    </section>

    <section class="py-5" id="buku">
      <div class="container">
        <div class="row">
          <div class="col text-center popular">
            <p>Popular Now</p>
          </div>
        </div>

        <div class="row">
          <!-- Looping card menggunakan foreach -->
          <?php 
            $card_buku = query("SELECT * FROM `card_buku`");
            $counter = 0;
            foreach($card_buku as $dataBuku){
              if($counter % 4 == 0 && $counter > 0){
                echo '</div><div class="row">';
              }
          ?>

          <div class="col-md-3">
            <div class="card mb-3">
              <img src="assets/<?php echo $dataBuku['gambar_buku']; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $dataBuku['judul_buku'] ?></h5>
                <p class="card-text"><?php echo $dataBuku['penulis'] ?></p>
                <p class="card-text">Stock Tersedia <?php echo $dataBuku['stok']; ?></p>
                <p class="card-text hargaBuku">Rp<?php echo $dataBuku['harga_satuan']; ?></p>
                <a href="detail_buku.php?id_buku=<?php echo $dataBuku['id_buku']; ?>" class="btn btn-primary float-start beli">Detail Buku</a>
                <a href="co.php?id_buku=<?php echo $dataBuku['id_buku']; ?>" class="btn btn-primary float-end beli">Buy Now</a>
              </div>
            </div>
          </div>

          <?php 
            $counter++;
          } 
          ?>

        </div>
      </div>
    </section>

    <section>
    <div class="container">
          <div class="col text-center popular">
            <p>Category</p>
          </div>
          <div class="popular">
          <p>Fantasi</p>
          </div>
                <div class="row">
          <!-- Looping card menggunakan foreach -->
          <?php 
            $card_buku = query("SELECT * FROM `data_buku_fantasi`");
            $counter = 0;
            foreach($card_buku as $dataBuku){
              if($counter % 4 == 0 && $counter > 0){
                echo '</div><div class="row">';
              }
          ?>

          <div class="col-md-3">
            <div class="card mb-3">
              <img src="assets/<?php echo $dataBuku['gambar_buku']; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $dataBuku['judul_buku'] ?></h5>
                <p class="card-text"><?php echo $dataBuku['penulis'] ?></p>
                <p class="card-text">Stock Tersedia <?php echo $dataBuku['stok']; ?></p>
                <p class="card-text hargaBuku">Rp<?php echo $dataBuku['harga_satuan']; ?></p>
                <a href="detail_buku_fantasi.php?id_buku=<?php echo $dataBuku['id_buku']; ?>" class="btn btn-primary float-start beli">Detail Buku</a>
                <a href="co.php?id_buku=<?php echo $dataBuku['id_buku']; ?>" class="btn btn-primary float-end beli">Buy Now</a>
              </div>
            </div>
          </div>

          <?php 
            $counter++;
          } 
          ?>

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
