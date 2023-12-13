<?php 

require '../koneksi.php';
$id = $_GET["id_buku"];
if ( hapus($id) > 0){
	echo "
  <script>
  alert(' data berhasil dihapus! ');
  document.location.href = 'index.php';
  </script>
  ";
}else {
  echo "
  <script>
  alert(' data terhapus! ');
  document.location.href = 'index.php';
  </script>
  ";
}
?>