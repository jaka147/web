<?php
include 'db_registrasi.php';

$id = $_GET['id'];
$db->query("DELETE FROM daftar_client WHERE id='$id'")or die(mysqli_error());
 
header("location:daftar-client.php?pesan=hapus");
?>