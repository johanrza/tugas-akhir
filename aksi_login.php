<?php
$error = '';
include 'connection.php';

if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$level = $_POST['level'];

	$result = mysqli_query($kon, "SELECT * FROM tb_login WHERE username='$username' AND password='$password'");

	if (mysqli_num_rows($result)==0) {
		$error = "Username atau Password Salah";
	} else {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['id'] = $row['id'];
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['level'] = $row['level'];

		if($row['level'] == "administrator" && $level==1){
            header("Location: admin/");
        }else if ($row['level'] == "manajemen" && $level==2) {
            header("Location: manajemen/");
        }else if ($row['level'] == "pribadi" && $level==3) {
            header("Location: pribadi/");
        }else{
            $error = "Login gagal";
        }
	}
}
?>