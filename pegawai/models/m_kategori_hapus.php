<?php 
include '../../connection.php';
$nama = $_GET['id'];

mysqli_query($kon, "UPDATE tb_transaksi SET transaksi_kategori='1' WHERE transaksi_kategori='$nama'");

mysqli_query($kon, "DELETE FROM tb_kategori WHERE id_kategori='$nama'");
header("Location: ../views/data-kategori.php?alert=hapus");
?>