<?php
//Jika belum login maka akan dialihkan ke halaman login lagi

if(isset($_SESSION['log'])){

} else {
    header('location:login.php');
}
?>