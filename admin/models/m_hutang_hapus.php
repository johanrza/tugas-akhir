<?php 
include '../../connection.php';
$id  = $_GET['id'];

mysqli_query($kon, "DELETE FROM tb_hutang WHERE id_hutang='$id'");
header("Location: ../views/data-hutang.php?alert=hapus");