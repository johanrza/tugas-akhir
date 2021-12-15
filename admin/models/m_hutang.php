<?php 
include '../../connection.php';
$tanggal  = $_POST['tanggal'];
$nominal  = $_POST['nominal'];
$ket = $_POST['keterangan'];

mysqli_query($kon, "INSERT INTO tb_hutang VALUES (NULL,'$tanggal','$nominal','$ket')")or die(mysqli_error($kon));
header("Location: ../views/data-hutang.php?alert=berhasil");
?>