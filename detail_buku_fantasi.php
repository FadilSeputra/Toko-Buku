<?php
    include "koneksi.php";
    session_start();
    // Periksa apakah parameter id_buku ada dalam URL
    if (isset($_GET['id_buku'])) {
    // Ambil id_buku dari URL
    $id_buku = $_GET['id_buku'];

    // Query untuk mendapatkan informasi buku berdasarkan id_buku
    $query = "SELECT * FROM data_buku_fantasi WHERE id_buku = '$id_buku'";
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah buku ditemukan
    if (mysqli_num_rows($result) > 0) {
        $buku = mysqli_fetch_assoc($result);
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

    <div class="container mb-5" id="detail_buku"> 
        <h2>Book Details</h2>
        <table class="table table-bordered shadow-sm">
            <tbody>
                <tr>
                    <th>Judul</th>
                    <td><?php echo $buku['judul_buku']; ?></td>
                </tr>
                <tr>
                    <th>Deskripsi</th>
                    <td><?php echo $buku['deskripsi']; ?></td>
                </tr>
                <tr>
                    <th>Penulis</th>
                    <td><?php echo $buku['penulis']; ?></td>
                </tr>
                <tr>
                    <th>Penerbit</th>
                    <td><?php echo $buku['penerbit']; ?></td>
                </tr>
                <tr>
                    <th>Tahun Terbit</th>
                    <td><?php echo $buku['tahun_terbit']; ?></td>
                </tr>
                <tr>
                    <th>Stok</th>
                    <td><?php echo $buku['stok']; ?></td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <td><?php echo "Rp. " . $buku['harga_satuan']; ?></td>
                </tr>
                <tr>
                    <th class="mt-5"><p class="mt-2 mb-2 fs-5 fw-bold">Order</p></th>
                    <td><a href="co.php?id_buku=<?php echo $buku['id_buku']; ?>" class="btn btn-success btn-sm mt-2 mb-2 fw-bold">Beli Sekarang</a></td>
                </tr>
            </tbody>
        </table>
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