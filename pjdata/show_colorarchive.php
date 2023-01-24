<?php
include 'condb.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    <title>Document</title>
</head>
<body>

  <div class="container">
  <div class="alert alert-success text-center h4 mt-4 mb-2" role="alert">ระบบจัดการลูกค้าทำสีรถยนต์</div>
  <a href="show_member.php" class="btn btn-success mb-2">ย้อนกลับ</a>
  <a href="add_colorarchive.php" class="btn btn-success mb-2">เพิ่มข้อมูล</a>
  <table class="table table-dark table-hover">
        <tr>
            <th>รหัสสี</th> 
            <th>สี</th> 
            <th>เฉดสี</th>
            <th>ประเภทของสี</th> 
            <th>ยี่ห้อสี</th> 
            <th>ราคาสี</th> 
            <th>Delete</th>
        </tr>

    <?php
    
    
    $sql1 = "SELECT * FROM color_archive ";
    $result = mysqli_query($conn,$sql1);  
    while($row = mysqli_fetch_array($result)){
    ?>
        <tr>
            <td><?php echo  $row["Color_id"];?></td>
            <td><?php echo  $row["Color_o"];?></td>
            <td><?php echo  $row["Color_shades"];?></td>
            <td><?php echo $row["Color_type"] ;?></td>
            <td><?php echo  $row["Color_brand"];?></td>
            <td><?php echo  $row["Color_price"];?></td>
            <td><a href="delete_colorarchive.php?cid=<?php echo $row["Color_id"] ;?>" class="btn btn-danger mb-2 ">Delete</a></td>
        </tr>
    <?php
    }
    
    
    mysqli_close($conn);
    ?> 
    </table>   
    </div>
</body>
</html>