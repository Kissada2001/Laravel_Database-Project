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
  <a href="add_Employee.php" class="btn btn-success mb-2">เพิ่มข้อมูล</a>
  <table class="table table-dark table-hover">
        <tr>
            <th>รหัสพนักงานช่าง</th> 
            <th>ชื่อของพนักงานช่าง</th> 
            <th>เบอร์โทรศัพท์</th> 
            <th>ที่อยู่พนักงานช่าง</th> 
            <th>เพศ</th>
            <th>เงินเดือน</th>
            <th>อายุ</th>
            <th>Delete</th>
        </tr>

    <?php
    
    
    $sql1 = "SELECT * FROM Employee";
    $result = mysqli_query($conn,$sql1);  
    while($row = mysqli_fetch_array($result)){
    ?>
        <tr>
            <td><?php echo  $row["Emp_id"];?></td>
            <td><?php echo $row["Emp_Name"] ;?></td>
            <td><?php echo  $row["Emp_TelePhone"];?></td>
            <td><?php echo  $row["Emp_address"];?></td>
            <td><?php echo  $row["Emp_sex"];?></td>
            <td><?php echo  $row["Emp_salary"];?></td>
            <td><?php echo  $row["Emp_age"];?></td>
            <td><a href="delete_employee.php?emp_id=<?php echo $row["Emp_id"] ;?>" class="btn btn-danger mb-2 ">Delete</a></td>
        </tr>
    <?php
    }
    
    
    mysqli_close($conn);
    ?> 
    </table>   
    </div>
</body>
</html>