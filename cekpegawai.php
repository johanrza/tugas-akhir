<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php?alert=Anda Belum Login");
}elseif ($_SESSION['level']!="pegawai") {
    session_destroy();
    header("Location: ../index.php?alert=Anda Bukan Pegawai");
}
?>