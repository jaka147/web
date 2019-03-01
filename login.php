<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FORM LOGIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" />
   
</head>
<body class="color">
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
            echo "<script>alert('Gagal !!Password ATAU Username anda salah');history.go(-1);</script>";
		}else if($_GET['pesan'] == "logout"){
            echo "<script>alert('ANDA BERHASIL LOG OUT');history.go(-1);</script>";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
<div id="kotak_login">
    <p id="kata_login">L O G I N</p>
    <form action="proses_login.php" method="POST">
        <label>Username</label><br>
        <input type="text" name="username" class="form_login" placeholder = "Username"><br>
        <label>password</label><br>
        <input type="password" name="password" class="form_login" placeholder="Password"><br>
        <br>
        <input type="submit" name="login" class="tombol_login" value="login">
        <br>
        <br>
        <div class="tombol_regis">
            <a href="registrasi.php" type="button" class="kata_regis">Registrasi</a><br>
        </div>
    </form><br>
  
</div>

</body>
</html>