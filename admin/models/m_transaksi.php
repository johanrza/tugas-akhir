<?php 
include '../../connection.php';
$tanggal  = $_POST['tanggal'];
$jenis  = $_POST['jenis'];
$kategori  = $_POST['kategori'];
$nominal  = $_POST['nominal'];
$keterangan  = $_POST['keterangan'];

$rand = rand();
$eks =  array('jpg','jpeg','pdf','PNG','png');
$filename = $_FILES['up_foto']['name'];

if($filename == ""){
	mysqli_query($kon, "INSERT INTO tb_transaksi VALUE (NULL,'$tanggal','$jenis','$kategori','$nominal','$keterangan','')")or die(mysqli_error($kon));
	header("Location: ../views/data-transaksi.php?alert=berhasil");
}else{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$eks) ) {
		header("Location: ../views/data-transaksi.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['up_foto']['tmp_name'], '../image/bukti/'.$rand.'_'.$filename);
		$file_gambar = $rand.'_'.$filename;
		mysqli_query($kon, "INSERT INTO tb_transaksi VALUE (NULL,'$tanggal','$jenis','$kategori','$nominal','$keterangan','$file_gambar')");
		header("Location: ../views/data-transaksi.php?alert=berhasil");
	}
}
?>