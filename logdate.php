<?php
    include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
        <?php 
         $query = mysqli_query($conn,"SELECT * FROM logdate");
         $no = 1;
       ?>
    <table>
        <tr>
            <th>card id</th>
            <th>user</th>
            <th>logdate</th>
        </tr>
        <?php  while ($data = mysqli_fetch_array($query)) {
           $tgl = $data["logdate"];
           $tgl = date("F j, Y, g:i a");
       ?>
        <tr>
        <td><?php echo $data["full_name"];?></td>
           <td><?php echo $data["idcard"];?></td>
           <td><?php echo $tgl?></td>
        </tr>
        <?php } ?>
    </table>


</body>
</html>