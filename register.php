<?php 
require 'koneksi.php';


function registrasi(){
  global $koneksi;
$name = mysqli_real_escape_string($koneksi, $_POST['name']);
$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = sha1($_POST['password']);
$level = $_POST['level'];

$query = "INSERT INTO `tb_login` (`id_user`, `name`, `email`, `username`, `password`,`level`, `last_login`) VALUES (NULL, '$name', '$email', '$username', '$password','$level', current_timestamp()) ";
mysqli_query($koneksi, $query );

return mysqli_affected_rows($koneksi);
}

//Akhir Tambah

?>

<?php
if ( isset($_POST["submit"])) {
if( registrasi($_POST) > 0) {
  echo "
  <script>
  alert(' Berhasil Membuat akun! ');
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
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

  <div class="container">
    <img src="assets/human.png" alt="Animated Image" class="animated-image">
    <div class="form-container">
      <form action="" id="register-form" method="post" class="form">
        <h2>Register</h2>
        <input type="name" name="name" id="name" placeholder="Name">
        <input type="email" name="email" id="email" placeholder="Email">
        <input type="username" name="username" id="username" placeholder="Username">
        <input type="password" name="password" id="password" placeholder="Password">
        <input type="hidden" name="level" id="level" value="user">

        <button type="submit" name="submit">Register</button>
        <p>Sudah Punya Akun? <a href="login.php">Login</a></p>
        
      </form>

    </div>
  </div>
</body>
</html>
