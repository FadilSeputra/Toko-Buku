<?php 
require '../koneksi.php';
$koneksi = mysqli_connect("localhost", "root", "", "tokobuku");
if ( isset($_POST["submit"])) {
if( tambah($_POST) > 0) {
  echo "
  <script>
  alert(' data berhasil ditambahkan! ');
  //document.location.href = 'admin.php';
  </script>
  ";
} else {
  echo "
  <script>
  alert(' data gagal ditambahkan! ');
  //document.location.href = 'admin.php';
  </script>
  ";
}

}
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../style.css">
  <title>Highmedia</title>
</head>
  <header>
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary  shadow p-3 mb-3 rounded">
      <div class="container">
        <a class="navbar-brand" href="../index.php">Highmedia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mx-auto">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="dataPesanan.php">Data Pesanan</a>
            <a class="nav-link" href="tambah.php">Tambah Data</a>
            </div>
            <div class="profile">
              <a href="../login.php" class="btn align-self-end login">Logout</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
<body>

		<h1 class="text-center">Tambah Data Buku</h1>
    <div class="container">
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col mb-3">
      <a href="tambah.php" class="btn align-self-end login">Popular</a>
      <a href="tambahDataFantasi.php" class="btn align-self-end login">Fantasi</a>
    </div>
  </div>
    <div class="container">
    <div class="row">
    <div class="col">
    <img href="https://icons8.com/illustrations/author/zD2oqC8lLBBA" src="../assets/kerja.png" width="350px">
    </div>
    <div class="col">
      <form action="" method="post" enctype="multipart/form-data">
      <div class="form-floating mb-3">
				<input class="form-control form-control-lg" type="file" name="gambar_buku" id="gambar_buku" required>
        <label for=""> Gambar </label>
			</div>
			<div class="form-floating mb-3">
				<input class="form-control" type="text" name="judul_buku" id="judul_buku" placeholder="Judul Buku" required>
        <label for="nama"> Judul Buku </label>
			</div>
			<div class="form-floating mb-3">
				<input type="text" class="form-control" name="penulis" id="penulis" placeholder="Penulis" required>
        <label for="alamat"> Penulis </label>
			</div>
      <div class="form-floating mb-3">
				<input class="form-control" type="text" name="stok" id="stok" placeholder="Stok" required>
        <label for="alamat"> Stok </label>
			</div>
      <div class="form-floating mb-3">
				<input class="form-control" type="text" name="harga_satuan" id="harga_satuan" placeholder="Harga" required>
        <label for="alamat"> Harga </label>
			</div>
			<div>
				<button type="submit" name="submit" class="btn btn-primary"> Tambah Data </button>
			</div>
        </div>
        </form>
    </div>
    </div>
    </div>


    <footer class="bg-light text-center py-4">
    <div class="container">
    <p>Hak Cipta &copy; 2023 Highmedia. All rights reserved.</p>
    </div>
    </footer>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>

</body>
</html>