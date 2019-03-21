<?php
    ob_start();
    session_start();
    if(isset($_SESSION['registrasi_username'])) header("location:dasboard.php");
    include "db_registrasi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql_login = mysqli_query($db, "SELECT * FROM db_registrasi WHERE username = '$username' AND password = '$password'");

    if(mysqli_num_rows($sql_login)>0){
        $row_registrasi = mysqli_fetch_array($sql_login);
        $_SESSION['registrasi_id'] = $row_registrasi['id'];
        $_SESSION['registrasi_username'] = $row_registrasi['username'];
        $_SESSION['registrasi_password'] = $row_registrasi['password'];
    header ("location:dasboard.php");
    } else{
        header ("location:login.php?pesan=gagal");
    }

    
?>