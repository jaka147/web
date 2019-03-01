<?php

include 'db_registrasi.php';

$username=$_POST['username'];
$pwd=$_POST['pwd'];
$email=$_POST['email'];
$no_telp=$_POST['no_telp'];

    // menyiapkan query
    $query = $db->query("INSERT INTO db_registrasi (username,password,no_telp,email)
    VALUES ('$username','$pwd','$email','$no_telp')");
    
echo $query;
    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
     header("Location: login.php" );


?>