<?php
include 'condb.php';


$mid = $_POST['mid'];
$mname = $_POST['mname'];
$mtel = $_POST['mtel'];
$madd = $_POST['madd'];
$msex = $_POST['msex'];
$msalary = $_POST['msalary'];
$mage = $_POST['mage'];


$sql4 = "INSERT INTO employee(Emp_id,Emp_Name,Emp_TelePhone,Emp_address,Emp_sex,Emp_salary,Emp_age) VALUES('$mid','$mname','$mtel','$madd','$msex','$msalary','$mage')";
$result4 = mysqli_query($conn,$sql4) or die ("Error in query: $sql4 " . mysqli_error());

if($result4){
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='Show_Employee.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
}


mysqli_close($conn);




?>