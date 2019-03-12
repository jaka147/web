<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<title>DataTables</title>
	<link rel="stylesheet" type="text/css" href="/media/css/site-examples.css?_=19472395a2969da78c8a4c707e72123a">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	<style type="text/css" class="init">
	
	</style>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript" class="init">
	
    $(document).ready(function() {
      $('#example').DataTable();
    } );

	</script>
</head>
<body class="">
  <?php 
    include "db_registrasi.php";
    $query = $db->query("SELECT * FROM daftar_client");
  ?>
		<div class="container">
        <h2 style="text-align: center">Daftar Client</h2>
				<table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <th>No</th>
              <th>Username</th>
              <th>no_telpone</th>
              <th>TanggalBoking</th>
              <th>Tempat Foto</th>
              <th>Action</th>
          </thead>
					<tbody>
            <?php
              if(mysqli_num_rows($query) > 0) {
                $no = 1;
                while($data = mysqli_fetch_array($query)){
            ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data["username"];?></td>
                    <td><?php echo $data["no_telp"];?></td>
                    <td><?php echo $data["tanggal"] ?></td>
                    <td><?php echo $data["tempat_foto"]?></td>
                    <td>
                      <a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo $data['id'] ?>">Delete</a>
                      <a class="btn btn-sm btn-success " href="#">Update</a>
                    </td>
                </tr>
            <?php 
                  $no++;
                }
              } 
            ?>
					</tbody>
         
				</table>
                <button class="btn btn-danger btn-lg text-light"><a href="dasboard.php" class="text-light"> DASBOARD</a></button>
	</div>
</body>
</html>