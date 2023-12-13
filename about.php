<?php 
include 'koneksi.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Bookstore</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="about.css">
</head>
<body>
    <header>
        <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary  shadow p-3 mb-3 rounded">
            <div class="container">
              <a class="navbar-brand" href="index.html">Media</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                  <a class="nav-link" aria-current="page" href="index.php">Home</a>
                  <a class="nav-link" href="koleksi.php">Collection</a>
                  <a class="nav-link">Author</a>
                  <a class="nav-link" href="about.html">About us</a>
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
        <div class="column">
            <img src="img/gambar1.png " style="width:300px;height:300px;" >
        </div>
            
        
        <section class="about-us">
            <h2>Tentang Kami</h2>
            <p>
                Media adalah toko buku online terkemuka yang menyediakan berbagai macam buku
                dari berbagai genre dan penulis terkenal. Kami berkomitmen untuk menyediakan layanan
                yang berkualitas tinggi kepada pelanggan kami dan menjadikan membaca sebagai pengalaman
                yang menyenangkan bagi semua orang.
            </p>
            
            <p>
                Tim kami terdiri dari para pecinta buku yang berdedikasi tinggi dan selalu siap membantu
                Anda menemukan buku yang sesuai dengan minat dan preferensi Anda. Kami juga menyediakan
                layanan pelanggan 24/7, jadi Anda dapat menghubungi kami kapan saja jika Anda memiliki
                pertanyaan atau masalah terkait pembelian buku.
            </p>
            <p>
                Dengan koleksi buku yang lengkap dan harga yang kompetitif, kami berharap dapat
                memperkaya pengetahuan dan pengalaman membaca Anda melalui layanan kami.
            </p>
        </section>
    </main>
    <footer class="bg-light text-center py-4">
        <div class="container">
          <p>Hak Cipta &copy; 2023 Media. All rights reserved.</p>
        </div>
      </footer>
      <script src="js/bootstrap.min.js"></script>
</body>
</html>
