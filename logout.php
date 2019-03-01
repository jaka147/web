<?php 
    session_start();

    session_destroy();

    header ("location:login.php");
    echo"Anda berhasil keluar";
?>