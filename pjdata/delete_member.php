<?php
include 'condb.php';
$id= $_GET["dd_id"];

$sql="DELETE FROM customerdata WHERE CusCar_id = '$id' ";
$sql2="DELETE FROM carinformation WHERE CusCar_id = '$id' ";


$result=mysqli_query($conn,$sql);
$result2=mysqli_query($conn,$sql2);


if($result){
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='show_member.php';</script>";
}else{
    echo "เกิดข้อผิดพลาดเกิดขึ้น";
}

if($$result2){
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='show_member.php';</script>";
}else{
    echo "เกิดข้อผิดพลาดเกิดขึ้น";
}


?>