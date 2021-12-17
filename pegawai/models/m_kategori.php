<?php 
include '../../connection.php';
$kategori  = $_POST['nama_kategori'];

mysqli_query($kon, "INSERT INTO tb_kategori VALUES (NULL,'$kategori')");
header("Location: ../views/data-kategori.php?alert=berhasil");
?>