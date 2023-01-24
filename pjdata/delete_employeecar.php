<?php
include 'condb.php';

$idempcar =$_GET["empcar_id"];
$sql3= "DELETE FROM EmployeeCar  WHERE Empcar_id = '$idempcar'";


$result3=mysqli_query($conn,$sql3);


if($result3){
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='show_EmployeeCar.php';</script>";
}else{
    echo "เกิดข้อผิดพลาดเกิดขึ้น";
}


?>