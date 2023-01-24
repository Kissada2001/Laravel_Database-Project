<?php
include 'condb.php';



$color = $_POST['color'];
$cshades = $_POST['Color_shades'];
$ctype = $_POST['ctype'];
$cid = $_POST['cid'];
$cbrand = $_POST['cbrand'];
$cprice = $_POST['cprice'];



$sql5 = "INSERT INTO color_archive(Color_id,Color_o,Color_shades,Color_type,Color_brand,Color_price) VALUES('$cid','$color','$cshades','$ctype','$cbrand','$cprice')";
$result5 = mysqli_query($conn,$sql5) or die ("Error in query: $sql5 " . mysqli_error());

if($result5){
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='show_colorarchive.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
}


mysqli_close($conn);




?>