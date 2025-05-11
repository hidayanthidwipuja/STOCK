<?php
//Jika belum login maka akan dialihkan ke halaman login lagi

if(!isset($_SESSION['log'])){
    header('location:login.php');
    exit();
} else {
    $idUserActive = $_SESSION['id'];
}
?>