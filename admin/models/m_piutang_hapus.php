<?php 
include '../../connection.php';
$id  = $_GET['id'];

mysqli_query($kon, "DELETE FROM tb_piutang WHERE id_piutang='$id'");
header("Location: ../views/data-piutang.php?alert=hapus");