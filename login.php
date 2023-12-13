<?php
    include "koneksi.php";
      session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Login & Register</title>
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <form action="cek_login.php" method="post"> 
  <div class="container">
    <img src="assets/human.png" alt="Animated Image" class="animated-image">
    <div class="form-container">
      <form id="login-form" class="form">
        <h2>Login</h2>
        	<?php
    if(isset($error)){
    	foreach($error as $error){
    		echo "<script>alert('$error')</script>";
    	};
    };
    ?>
        <p>Hey,Enter your details to get sign in to your account</p>
        <input class="username" type="username" name="username" placeholder="Username" required> 
        <input type="password" name="password" placeholder="Password" required> 
        <input class="btn popular" type="submit" name="submit" value="Login Sekarang">
        <p>Belum Punya akun? <a href="register.php">Daftar</a></p>
      </form>
    </div>
  </div>
</body>
</html>
