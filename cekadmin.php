<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php?alert=Anda Belum Login");
}elseif ($_SESSION['level']!="administrator") {
    session_destroy();
    header("Location: ../index.php?alert=Anda Bukan Admin");
}
?>