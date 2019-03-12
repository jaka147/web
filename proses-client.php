<?php 
include 'db_registrasi.php';

$username=$_POST['username'];
$no_telp=$_POST['no_telp'];
$boking=$_POST['boking'];
$tmp_foto=$_POST['tempat_foto'];

$query = $db->query("INSERT INTO daftar_client (username,no_telp,tanggal,tempat_foto)
VALUE ('$username','$no_telp','$boking','$tmp_foto')");

if ($query === TRUE) {
    header("Location: navbar.php" );
} else {
    echo "Error: " . $query . "<br>" . $db->error;
}


?>