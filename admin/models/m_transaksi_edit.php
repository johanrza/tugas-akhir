<?php 
include '../../connection.php';
$id  = $_POST['id'];
$tanggal  = $_POST['tanggal'];
$jenis  = $_POST['jenis'];
$kategori  = $_POST['kategori'];
$nominal  = $_POST['nominal'];
$keterangan  = $_POST['keterangan'];

$rand = rand();
$eks =  array('jpg','jpeg','pdf');
$filename = $_FILES['trnfoto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if($filename == ""){
	mysqli_query($kon, "UPDATE tb_transaksi SET tanggal_transaksi='$tanggal', jenis_transaksi='$jenis', kategori_transaksi='$kategori', nominal_transaksi='$nominal', keterangan_transaksi='$keterangan' WHERE id_transaksi='$id'") or die(mysqli_error($kon));
	header("Location: ../views/data-transaksi.php?alert=berhasilupdate");
}else{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$eks) ) {
		header("Location: ../views/data-transaksi.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['trnfoto']['tmp_name'], '../gambar/bukti/'.$rand.'_'.$filename);
		$xgambar = $rand.'_'.$filename;
		mysqli_query($kon, "UPDATE tb_transaksi SET tanggal_transaksi='$tanggal', jenis_transaksi='$jenis', kategori_transaksi='$kategori', nominal_transaksi='$nominal', keterangan_transaksi='$keterangan', foto_transaksi='$xgambar' WHERE id_transaksi='$id'");
		header("Location: ../views/data-transaksi.php?alert=berhasil");
	}
}