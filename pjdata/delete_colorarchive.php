<?php
include 'condb.php';

$cid =$_GET["cid"];

$sql5= "DELETE FROM color_archive  WHERE Color_id = '$cid'";

$result5=mysqli_query($conn,$sql5);


if($result5){
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='show_colorarchive.php';</script>";
}else{
    echo "เกิดข้อผิดพลาดเกิดขึ้น";
}

?>