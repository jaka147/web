<?php
include 'db_registrasi.php';

$id = $_GET['id'];
$db->query("DELETE FROM db_registrasi WHERE id='$id'")or die(mysqli_error());
 
header("location:table.php?pesan=hapus");
?>