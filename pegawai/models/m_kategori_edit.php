<?php 
include '../../connection.php';
$id  = $_POST['id'];
$namakategori  = $_POST['nama_kategori'];

mysqli_query($kon, "UPDATE tb_kategori SET nama_kategori='$namakategori' where id_kategori='$id'");
header("location: ../views/data-kategori.php?alert=berhasilupdate");