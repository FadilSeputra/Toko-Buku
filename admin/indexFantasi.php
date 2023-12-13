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
  <!-- Buku Fantasi -->

  <div class="dataBukuFantasi">
<div class="row">
  <div class="col">
    <div class="white-box">
      <div class="d-md-flex mb-3">
        <h3 class="box-title ms-5">Manage Book Fantasi</h3>
        <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
        <a href="index.php" class="btn align-self-end login">Popular</a>
        </div>
      </div>
        <div class="table-responsive">
          <table class="table no-wrap">
            <thead>
              <tr>
                <th class="border-top-0">Id</th>
                <th class="border-top-0">Judul</th>
                <th class="border-top-0">Deskripsi</th>
                <th class="border-top-0">Penulis</th>
                <th class="border-top-0">Penerbit</th>
                <th class="border-top-0">Tahun Terbit</th>
                <th class="border-top-0">Stok</th>
                <th class="border-top-0">Harga</th>
                <th class="border-top-0 text-center" colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                  $noFantasi = 1;
                  $card_buku_fantasi = query("SELECT * FROM `data_buku_fantasi`");
                  foreach($card_buku_fantasi as $dataBukuFantasi){
                ?>
              <tr>
                <td><?php echo $noFantasi++; ?></td>
                <td><?php echo $dataBukuFantasi['judul_buku']; ?></td>
                <td><?php echo $dataBukuFantasi['deskripsi']; ?></td>
                <td><?php echo $dataBukuFantasi['penulis']; ?></td>
                <td><?php echo $dataBukuFantasi['penerbit']; ?></td>
                <td><?php echo $dataBukuFantasi['tahun_terbit']; ?></td>
                <td><?php echo $dataBukuFantasi['stok']; ?></td>
                <td>Rp<?php echo $dataBukuFantasi['harga_satuan']; ?></td>
                <td>
                  <a type="button" class="btn btn-primary edit-btn" data-bs-toggle="modal"
                    data-bs-target="#editModal<?= $noFantasi ?>"
                    data-id="<?php echo $dataBukuFantasi['id_buku']; ?>">Edit</a>
                </td>
                <td>
                  <a href='delete.php?id_buku="<?php echo $dataBuku['id_buku']; ?>"' type="button"
                    class="btn btn-danger">Hapus</a>
              </tr>

              <!-- Awal Modal Edit -->
              <div class="modal fade" id="editModal<?= $noFantasi ?>" tabindex="-1" aria-labelledby="editModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="editModalLabel">Edit Buku</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="updateFantasi.php" method="POST">
                        <div class="mb-3">
                          <input type="hidden" name="id_buku" id="id_buku" value="<?= $dataBukuFantasi['id_buku']; ?>">
                          <label for="judul_buku" class="form-label">Judul</label>
                          <input type="text" class="form-control" id="judul_buku" name="judul_buku"
                            value="<?php echo $dataBukuFantasi['judul_buku']; ?>">
                        </div>
                        <div class="mb-3">
                          <label for="deskripsi" class="form-label">Deskripsi</label>
                          <textarea class="form-control" id="deskripsi"
                            name="deskripsi"><?php echo $dataBukuFantasi['deskripsi']; ?></textarea>
                        </div>
                        <div class="mb-3">
                          <label for="penulis" class="form-label">Penulis</label>
                          <input type="text" class="form-control" id="penulis" name="penulis"
                            value="<?php echo $dataBukuFantasi['penulis']; ?>">
                        </div>
                        <div class="mb-3">
                          <label for="penerbit" class="form-label">Penerbit</label>
                          <input type="text" class="form-control" id="penerbit" name="penerbit"
                            value="<?php echo $dataBukuFantasi['penerbit']; ?>">
                        </div>
                        <div class="mb-3">
                          <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                          <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit"
                            value="<?php echo $dataBukuFantasi['tahun_terbit']; ?>">
                        </div>
                        <div class="mb-3">
                          <label for="stok" class="form-label">Stok</label>
                          <input type="number" class="form-control" id="stok" name="stok"
                            value="<?php echo $dataBukuFantasi['stok']; ?>">
                        </div>
                        <div class="mb-3">
                          <label for="harga_satuan" class="form-label">Harga</label>
                          <input type="number" class="form-control" id="harga_satuan" name="harga_satuan"
                            value="<?php echo $dataBukuFantasi['harga_satuan']; ?>">
                        </div>
                        <div class="modal-footer">
                          <button name="ubah" type="button" class="btn btn-secondary text-"
                            data-bs-dismiss="modal">Tutup</button>
                          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal Edit Akhir -->

              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Akhir Buku Fantasi -->


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