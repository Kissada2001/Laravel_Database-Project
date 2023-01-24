<?php
include 'condb.php';
// ------


//--------
$ecarid = $_POST['ecarid'];
$ename = $_POST['ename'];
$etel = $_POST['etel'];
$eadd = $_POST['eadd'];
$esex = $_POST['esex'];
$esalary = $_POST['esalary'];
$eage = $_POST['eage'];


$sql3 = "INSERT INTO employeecar(Empcar_id,Empcar_Name,Empcar_TelePhone,Empcar_address,Empcar_sex,Empcar_salary,Empcar_age) VALUES('$ecarid','$ename','$etel','$eadd','$esex','$esalary','$eage')";
$result3 = mysqli_query($conn,$sql3) or die ("Error in query: $sql3 " . mysqli_error());


if($result3){
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='Show_Employeecar.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
}


mysqli_close($conn);




?>