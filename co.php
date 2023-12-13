<?php
    include "koneksi.php";
    $koneksi = mysqli_connect("localhost", "root", "", "tokobuku");
    

    session_start();
    // Periksa apakah parameter id_buku ada dalam URL
    if (isset($_GET['id_buku'])) {
    // Ambil id_buku dari URL
    $id_buku = $_GET['id_buku'];

    // Query untuk mendapatkan informasi buku berdasarkan id_buku
    $query = "SELECT * FROM card_buku WHERE id_buku = '$id_buku'";
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah buku ditemukan
    if (mysqli_num_rows($result) > 0) {
        $buku = mysqli_fetch_assoc($result);
?>

              <?php
                $login = "SELECT * FROM tb_login";
                $dataUser = mysqli_query($koneksi, $login);
                $user = mysqli_fetch_assoc($dataUser);
              ?>

<?php



if ( isset($_POST["submit"])) {
if( inputDataCo($_POST) > 0) {
  echo "
  <script>
  alert(' Berhasil Membuat Pesanan! ');
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
        <a class="navbar-brand" href="index.html">Highmedia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mx-auto">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="koleksi.php">Collection</a>
            <a class="nav-link" href="#">About us</a>
            <a class="nav-link">Contact</a>
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
    <section class="jumbotron mb-5">
      <div class="container same">
        <div class="row">
          <div class="col build">
        <h3 class="display-4 ganti fw-semibold">Book Details</h3>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <a href="#detail_buku" class="btn ubah fw-semibold">Explore Book</a>
        </div> 
        <div class="col bocil1">
        <img src="assets/bocil.png" width="300px" class="bocil">
        </div>
      </div>
    </section>

	<div class="container  d-flex justify-content-center">
  <div>
		<div class="col">
			<h4>Pesanan anda segera selesai silahkan lengkapi data diri </h4>
			<div class="panel panel-success">
				<div class="panel-heading">
					Checkout
				</div>
				<div class="panel-body">
        <form action="" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="name" class="form-control" placeholder="Nama" id="name" value="<?php echo $_SESSION['name']; ?>" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" placeholder="Email" id="email" value="<?php echo $_SESSION['email']; ?>" required>
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" class="form-control" placeholder="Alamat" id="alamat" required>
					</div>
					<div class="form-group">
						<label>Nomor Kontak</label>
						<input type="text" name="nomor_kontak" class="form-control" placeholder="Nomor Kontak" id="nomor_kontak" required>
					</div>
					<div class="form-group">
						<label>Produk</label>
					<input type="text" name="judul_buku" class="form-control" placeholder="Judul Buku" id="judul_buku" value="<?php echo $buku['judul_buku']; ?>" required>
					</div>
					<label>Harga</label>
					<input type="text" name="harga_satuan" class="form-control" placeholder="Harga Buku" id="harga_satuan" value="<?php echo $buku['harga_satuan']; ?>" required>
					</div>
					<div class="form-group mb-3">
						<label>Catatan</label>
						<textarea name="catatan" class="form-control" rows="3" id="catatan" required></textarea>
					</div>
					<div class="form-group mb-3">
						<button type="submit" name="submit" class="btn btn-primary send"> Tambah Data </button>
					</div>

					<div id="text-info"></div>
				</div>
			</div>
		</div>
    </form>
	</div>
  

    <?php
        } else {
            echo "Book not found.";
        }
        } else {
            echo "Parameter id_buku not found in the URL.";
        }
    ?>

  </main>

  <footer class="bg-light text-center py-4">
    <div class="container">
      <p>Hak Cipta &copy; 2023 Highmedia. All rights reserved.</p>
    </div>
  </footer>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>