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
  <a href="add_member.php" class="btn btn-warning mb-2">ADD DATA</a>
  <a href="Show_carinformation.php" class="btn btn-success mb-2">ข้อมูลรถยนต์</a>
  <a href="Show_EmployeeCar.php" class="btn btn-success mb-2">ข้อมูลพนักงานรับรถยนต์</a>
  <a href="Show_Employee.php" class="btn btn-success mb-2">ข้อมูลพนักงานช่าง</a>
  <a href="Show_colorarchive.php" class="btn btn-success mb-2">คลังเก็บสี</a>
  <table class="table table-dark table-hover">
        <tr>
            <th>รหัสลูกค้า</th> 
            <th>รหัสการรับเข้ารถยนต์</th>
            <th>รหัสพนักงานรับรถ</th> 
            <th>รหัสพนักงานช่าง</th>
            <th>สีที่เลือก</th> 
            <th>เฉดสีที่เลือก</th>
            <th>ชื่อลูกค้า</th> 
            <th>นามสกุลลูกค้า</th> 
            <th>เบอร์โทรศัพท์ลูกค้า</th> 
            <th>ที่อยู่ลูกค้า</th>
            <th>Delete</th>
        </tr>
        
        

    <?php
    

    $sql = "SELECT * FROM customerdata 
              JOIN carinformation ON customerdata.CusCar_id=carinformation.CusCar_id
              JOIN employee ON  customerdata.Emp_id=employee.Emp_id
              JOIN employeecar ON customerdata.Empcar_id= employeecar.Empcar_id
              JOIN color_archive ON customerdata.Color_o= color_archive.Color_o AND customerdata.Color_shades= color_archive.Color_shades
             ORDER BY customerdata.CusCar_name DESC;
             ";
    
    $result = mysqli_query($conn,$sql);  
    while($row = mysqli_fetch_array($result)){
    ?>
        <tr>
            <td><?php echo $row["CusCar_id"] ;?></td>
            <td><?php echo  $row["Car_id"];?></td>
            <td><?php echo $row["Empcar_id"] ;?></td>
            <td><?php echo $row["Emp_id"] ;?></td>
            <td><?php echo $row["Color_o"] ;?></td>
            <td><?php echo  $row["Color_shades"];?></td>
            <td><?php echo  $row["CusCar_name"];?></td>
            <td><?php echo  $row["CusCar_Lname"];?></td>
            <td><?php echo  $row["CusCar_telephone"];?></td>
            <td><?php echo  $row["CusCar_address"];?></td>
            <td><a href="delete_member.php?dd_id=<?php echo $row["CusCar_id"] ;?>" class="btn btn-danger mb-2">Delete</a></td>
        </tr>
    <?php
    }
    
    
    mysqli_close($conn);
    ?> 
    </table>
     
    </div>
</body>
</html>