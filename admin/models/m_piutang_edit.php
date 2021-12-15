<?php 
include '../../connection.php';
$id  = $_POST['id'];
$tanggal  = $_POST['tanggal'];
$nominal  = $_POST['nominal'];
$keterangan  = $_POST['keterangan'];

mysqli_query($kon, "UPDATE tb_piutang SET tanggal_piutang='$tanggal', nominal_piutang='$nominal', keterangan_piutang='$keterangan' WHERE id_piutang='$id'") or die(mysqli_error($kon));
header("Location: ../views/data-piutang.php?alert=berhasilupdate");
?>