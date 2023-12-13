<?php 
require '../koneksi.php';
$koneksi = mysqli_connect("localhost", "root", "", "tokobuku");
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
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
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
  <!-- Buku Popular -->

<div class="dataBuku">
<div class="row">
  <div class="col">
    <div class="white-box">
      <div class="d-md-flex mb-3">
        <h3 class="box-title ms-auto">DATA PESANAN</h3>
        <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
        </div>
      </div>
      <div class="table-responsive">
        <table class="table no-wrap">
          <thead>
            <tr>
              <th class="border-top-0">Id</th>
              <th class="border-top-0">Name</th>
              <th class="border-top-0">Email</th>
              <th class="border-top-0">Alamat</th>
              <th class="border-top-0">Nomor Kontak</th>
              <th class="border-top-0">Judul Buku</th>
              <th class="border-top-0">Harga</th>
              <th class="border-top-0">Catatan</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            $tb_co = query("SELECT * FROM `tb_co`");
            foreach($tb_co as $dataPesanan){
          ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $dataPesanan['name']; ?></td>
              <td><?php echo $dataPesanan['email']; ?></td>
              <td><?php echo $dataPesanan['alamat']; ?></td>
              <td><?php echo $dataPesanan['nomor_kontak']; ?></td>
              <td><?php echo $dataPesanan['judul_buku']; ?></td>
              <td>Rp<?php echo $dataPesanan['harga_satuan']; ?></td>
              <td><?php echo $dataPesanan['catatan']; ?></td>


            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>


<!-- Akhir Buku Popular -->


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