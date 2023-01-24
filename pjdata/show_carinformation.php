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
  
  <table class="table table-dark table-hover">
        <tr>
            <th>รหัสการรับเข้าทำสีรถยนต์</th> 
            <th>ยี่ห้อรถยนต์</th> 
            <th>ประเภทรถ</th> 
            <th>เลขทะเบียน</th>
            <th>รุ่น</th>
            <th>สีรถเดิม</th>
            <th>Delete</th>
        </tr>
        
        

    <?php
    
    $sql = "SELECT * FROM carinformation";


    $result = mysqli_query($conn,$sql);  
    while($row = mysqli_fetch_array($result)){
    ?>
        <tr>
            <td><?php echo  $row["Car_id"];?></td>
            <td><?php echo $row["barndCar"] ;?></td>
            <td><?php echo  $row["Car_type"];?></td>
            <td><?php echo  $row["Car_number"];?></td>
            <td><?php echo  $row["Car_model"];?></td>
            <td><?php echo  $row["Car_color"];?></td>
            <td><a href="delete_member.php?dd_id=<?php echo $row["Empcar_id"] ;?>" class="btn btn-danger mb-2 ">Delete</a></td>
        </tr>
    <?php
    }
    
    
    mysqli_close($conn);
    ?> 
    </table>   
    </div>
</body>
</html>