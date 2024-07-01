<?php
include "../config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>

<?php
  $query = mysqli_query($conn,"SELECT  kamar_1.cardid, users.full_name,logdate
  FROM kamar_1
  INNER JOIN users ON kamar_1.cardid = users.id");
  $no = 1;

 
?>
   
  <form action="" method="post">
  <table class="table">
		<thead>
			<tr>
				<th>No Kamar</th>
				<th>Nama Pengguna</th>
				<th>NIK</th>
        <th>Tanggal akses</th>				
			</tr>
		</thead>
		<tbody>
    <?php  while ($data = mysqli_fetch_array($query)) {
            $tgl = $data["logdate"];
            $tgl = date("F j, Y, g:i a");
        ?>
     
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $data["full_name"];?></td>
            <td><?php echo $data["cardid"];?></td>

            
            <td><?php echo $tgl?></td>
            
            
     
          </td>
        </tr>
      
        <?php } ?>
		</tbody>
	</table>
  </form>
</body>
</html>