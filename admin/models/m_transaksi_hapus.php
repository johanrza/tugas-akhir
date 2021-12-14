<?php 
include '../../connection.php';
$id  = $_GET['id'];

mysqli_query($kon, "DELETE FROM tb_transaksi WHERE id_transaksi='$id'");
header("Location: ../views/data-transaksi.php?alert=hapus");