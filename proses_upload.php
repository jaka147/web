<?php

include "db_registrasi.php";

$nama_file=$_FILES['gambar']['name'];
$ukuran_file=$_FILES['gambar']['size'];
$tipe_file=$_FILES['gambar']['type'];
$tmp_file=$_FILES['gambar']['tmp_name'];

//tempat nyimpen file
$path = "images/".$nama_file;
 
if($tipe_file == "image/jpeg" || $tipe_file =="image/png"){
    
    if($ukuran_file <= 1000000){
    
    if(move_uploaded_file($tmp_file, $path)){

        $query =$db->query ("INSERT INTO upload(nama,ukuran,tipe) 
        VALUE ('.$nama_file'','.$ukuran_file','.$tipe_file')");
            
            
    
    }
    }
}
?>