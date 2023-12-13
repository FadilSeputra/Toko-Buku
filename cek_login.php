<?php
    require 'koneksi.php';

    session_start();

    if(isset($_POST['submit'])){

//$name = mysqli_real_escape_string($koneksi, $_POST['name']);
$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = sha1($_POST['password']);
//$level = $_POST['level'];

$query1 = " SELECT * FROM tb_login WHERE username = '$username' && password = '$password'  ";

$result = mysqli_query($koneksi, $query1);

if(mysqli_num_rows($result) > 0){

	$row = mysqli_fetch_array($result);
	       	$_SESSION['name'] = $row['name'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['name'] = $row['name'];
	if($row['level'] == 'admin'){

    $_SESSION['admin_name'] = $row['name'];
    header('location:admin/index.php');

	}elseif ($row['level'] == 'user') {

		$_SESSION['user_name'] = $row['name'];
		header('location:index.php');
		
	}


}else{
	 echo "<script>alert('Username/Password yang anda masukkan salah.'); document.location='login.php';</script>";
        exit();
}

}

?>