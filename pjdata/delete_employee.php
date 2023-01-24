<?php
include 'condb.php';

$idemp =$_GET["emp_id"];


$sql4= "DELETE FROM Employee  WHERE Emp_id = '$idemp'";

$result4=mysqli_query($conn,$sql4);

if($result4){
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='show_Employee.php';</script>";
}else{
    echo "เกิดข้อผิดพลาดเกิดขึ้น";
}


?>