<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body style="background-image: url(goblok.jpg)">

<div class="container">
    <div class="kotak_regis">
        <h2><center>Silahkan Registrasi</center></h2>
        <form action="prose.php" class="form" method="POST">
            <div class="form-group">
                <label for="username">UserName:</label>
                <input type="username" class="form-control" id="username" placeholder="masukan username" name="username">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Masukan password" name="pwd">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="masukan username" name="email">
            </div>
            <div class="form-group">
                <label for="no-telp">No-Telepon:</label>
                <input type="username" class="form-control" id="no-telp" placeholder="Masukan no-telp" name="no_telp">
            </div>
            <div class="checkbox">
                <label><input type="checkbox"  name="remember"> Remember me</label>
            </div><br>
            <div>
                <button type="submit" class="tombol_regis">Submit</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
