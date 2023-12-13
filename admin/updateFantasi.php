<?php
  include "../koneksi.php";

  if ($_SERVER["REQUEST_METHOD"] === "POST")  {
    // Mendapatkan data yang dikirim melalui metode POST
    $id_buku = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $deskripsi = $_POST['deskripsi'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $stok = $_POST['stok'];
    $harga_satuan = $_POST['harga_satuan'];

    // Mengeksekusi query untuk memperbarui data buku
    
    $sql_update = "UPDATE data_buku_fantasi SET judul_buku = '$judul_buku', deskripsi = '$deskripsi', penulis = '$penulis', penerbit = '$penerbit', tahun_terbit = '$tahun_terbit', stok = '$stok', harga_satuan = '$harga_satuan' WHERE id_buku = '$id_buku'";
    $result = mysqli_query($koneksi, $sql_update);

    header("Location: indexFantasi.php");
    exit;
  }
?>
