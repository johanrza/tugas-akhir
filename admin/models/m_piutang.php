<?php 
include '../../connection.php';
$tanggal  = $_POST['tanggal'];
$nominal  = $_POST['nominal'];
$keterangan  = $_POST['keterangan'];

mysqli_query($kon, "INSERT INTO tb_piutang VALUES (NULL,'$tanggal','$nominal','$keterangan')")or die(mysqli_error($kon));
header("Location: ../views/data-piutang.php?alert=berhasil");
?>