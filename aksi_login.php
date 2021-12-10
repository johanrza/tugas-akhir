<?php 
$username = $_POST['username'];
$password = md5($_POST['password']);

include 'connection.php';

$user = mysqli_query($kon, "SELECT * FROM tb_login WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($user);

if($cek > 0){
	session_start();
	$row = mysqli_fetch_array($user);
	$_SESSION['id'] = $row['id'];
	$_SESSION['nama'] = $row['nama'];
	$_SESSION['username'] = $row['username'];
	$_SESSION['level'] = $row['level'];

	if($row['level'] == "administrator"){
		$_SESSION['status'] = "administrator_logedin";
		header("location:admin/");
	}else if($row['level'] == "manajemen"){
		$_SESSION['status'] = "manajemen_logedin";
		header("location:manajemen/");
	}else{
		header("location:index.php?alert=gagal");
	}
}else{
	header("location:index.php?alert=gagal");
}
