<?php
session_start();
//cek apakah admin sudah login
if (!isset($_SESSION['username'])){
    header("Location: ../index.php?alert=Anda Belum Login");
}
// cek level admin
// if ($_SESSION['level']!="Administrator"){
//     die("Anda bukan admin");
// }
?>