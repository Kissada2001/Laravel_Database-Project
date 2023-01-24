<?php
include 'condb.php';
// ------
$test = $_POST["test"];
$test2 = $_POST["test2"];
$test3 = $_POST["test3"];
$test4 = $_POST["test4"];
$test5 = $_POST["test5"];
$id = $_POST['id'];
$f_name = $_POST['fname'];
$l_name = $_POST['lname'];
$tel_ = $_POST['tel'];
$add_ = $_POST['add'];
// -------
$car_id = $_POST['car_id'];
$brand = $_POST['brand'];
$type = $_POST['type'];
$carnum = $_POST['carnum'];
$model = $_POST['model'];
$color = $_POST['color'];

$sql1 = "INSERT INTO customerdata(Empcar_id,CusCar_id,Emp_id,Color_id,Color_o,Color_shades,CusCar_name,CusCar_Lname,CusCar_telephone,CusCar_address) VALUES('$test','$id','$test2','$test5','$test3','$test4','$f_name','$l_name','$tel_','$add_')";
$result1 = mysqli_query($conn,$sql1) or die ("Error in query: $sql1 " . mysqli_error($conn)."<br>$sql1");

$sql2 = "INSERT INTO carinformation(CusCar_id,Car_id,barndCar,Car_type,Car_number,Car_model,Car_color) VALUES('$id','$car_id','$brand','$type','$carnum','$model','$color')";
$result2 = mysqli_query($conn,$sql2) or die ("Error in query: $sql2 " . mysqli_error());


if($result1 && $result2){
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='show_member.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
}


mysqli_close($conn);




?>