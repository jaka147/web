<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"  href="/jaka/style.css">
    <title>Document</title>
</head>
<body>  
 
<h2>List Mahasiswa</h2>
<table border="1" class="middle">
    <tr>
        <th>  ID</th>
        <th>   NAMA</th>
        <th>  PASSWORD</th>
        <th>  Password</th>
        <th>  Edit</th>
        <th>  hapus</th>    
    </tr
    >
    <?php
    include '../db_registrasi.php';
    $query = $db->query("SELECT  * from registrasi");
    $no=1;
    foreach ($query as $row){
        echo "<tr>
            <td>$no</td>
            <td>".$row['username']."</td>
            <td>".$row['password']."</td>
            <td>".$row['email']."</td>
            <td>edit</td>
            <td>hapus</td>
            
              </tr>";
        $no++;
    }
    ?>
</table>
 



    
</body>
</html>