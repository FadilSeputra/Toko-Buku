<?php 
$koneksi = mysqli_connect("localhost", "root", "", "tokobuku");

function query($query) {
  global $koneksi;
  $result =mysqli_query($koneksi, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}



//Data Pesanan
function inputDataCo($dataCO){
  global $koneksi;
  $name = htmlspecialchars($dataCO["name"]);
  $email = htmlspecialchars($dataCO["email"]);
  $alamat = htmlspecialchars($dataCO["alamat"]);
  $nomor_kontak = htmlspecialchars($dataCO["nomor_kontak"]);
  $judul_buku = htmlspecialchars($dataCO["judul_buku"]);
  $harga_satuan = htmlspecialchars($dataCO["harga_satuan"]);
  $catatan = htmlspecialchars($dataCO["catatan"]);

$query = "INSERT INTO `tb_co` (`id_user`, `name`, `email`, `alamat`, `nomor_kontak`, `judul_buku`, `harga_satuan`, `catatan`) VALUES (NULL, '$name', '$email', '$alamat', '$nomor_kontak', '$judul_buku', '$harga_satuan', '$catatan') ";
mysqli_query($koneksi, $query );

return mysqli_affected_rows($koneksi);
}
//Akhir Data Pesanan



//Tambah data Buku Popular
function tambah($data){
  global $koneksi;
  // $gambar_buku = $data["gambar_buku"];
  $judul_buku = htmlspecialchars($data["judul_buku"]);
  $penulis = htmlspecialchars($data["penulis"]);
  $stok = htmlspecialchars($data["stok"]);
  $harga_satuan = htmlspecialchars($data["harga_satuan"]);
  $gambar_buku = upload();
  if( !$gambar_buku ){
  return false;
  };

$query = "INSERT INTO `card_buku` (`id_buku`, `gambar_buku`, `judul_buku`, `penulis`, `stok`, `harga_satuan`) VALUES (NULL, '$gambar_buku', '$judul_buku', '$penulis', '$stok', '$harga_satuan');";
mysqli_query($koneksi, $query );

return mysqli_affected_rows($koneksi);
}

//Akhir Tambah

//Tambah data Buku Fantasi
function tambahDataFantasi($dataFantasi){
  global $koneksi;
  // $gambar_buku = $dataFantasi["gambar_buku"];
  $judul_buku = htmlspecialchars($dataFantasi["judul_buku"]);
  $penulis = htmlspecialchars($dataFantasi["penulis"]);
  $stok = htmlspecialchars($dataFantasi["stok"]);
  $harga_satuan = htmlspecialchars($dataFantasi["harga_satuan"]);
  $gambar_buku = upload();
  if( !$gambar_buku ){
  return false;
  };

$query = "INSERT INTO `data_buku_fantasi` (`id_buku`, `gambar_buku`, `judul_buku`, `penulis`, `stok`, `harga_satuan`) VALUES (NULL, '$gambar_buku', '$judul_buku', '$penulis', '$stok', '$harga_satuan');";
mysqli_query($koneksi, $query );

return mysqli_affected_rows($koneksi);
}

//Akhir Tambah


function upload(){
  
  $namaFile = $_FILES['gambar_buku']['name'];
  $ukuranFile = $_FILES['gambar_buku']['size'];
  $error = $_FILES['gambar_buku']['error'];
  $tmpName = $_FILES['gambar_buku']['tmp_name'];
  
  // cek
if($error === 4){
  echo "<script>alert('pilih gambar terlebih dahulu')</script>";
  return false;
}

// cek
$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
$ekstensiGambar = explode('.' , $namaFile);
$ekstensiGambar = strtolower(end($ekstensiGambar));
if ( !in_array($ekstensiGambar , $ekstensiGambarValid)){
  echo "<script>alert('yang anda upload bukan gambar')</script>";
  return false;
}

//cek ukuran
if ($ukuranFile > 1500000){
  echo "<script>alert('ukuran gambar terlalu besar')</script>";
  return false;
}

move_uploaded_file($tmpName, '../assets/' . $namaFile);
return $namaFile;

}

function hapus($id){
	global $koneksi;

	mysqli_query($koneksi, "DELETE FROM card_buku WHERE id_buku = $id ");
	return mysqli_affected_rows($koneksi);
}

?>