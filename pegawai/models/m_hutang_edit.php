<?php 
include '../../connection.php';
$id  = $_POST['id'];
$tanggal  = $_POST['tanggal'];
$nominal  = $_POST['nominal'];
$keterangan  = $_POST['keterangan'];

mysqli_query($kon, "UPDATE tb_hutang SET tanggal_hutang='$tanggal', nominal_hutang='$nominal', keterangan_hutang='$keterangan' WHERE id_hutang='$id'") or die(mysqli_error($kon));
header("Location: ../views/data-hutang.php?alert=berhasilupdate");
?>