<?php
include 'condb.php';
$sql = "SELECT * FROM employeecar";
$result = mysqli_query($conn,$sql);
$sql2 = "SELECT * FROM employee";
$result2 = mysqli_query($conn,$sql2);
$sql3 = "SELECT * FROM color_archive";
$result3 = mysqli_query($conn,$sql3);
$sql4 = "SELECT * FROM color_archive";
$result4 = mysqli_query($conn,$sql4);
$sql5 = "SELECT * FROM color_archive";
$result5 = mysqli_query($conn,$sql5);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
    
    <div class="alert alert-success text-center h3 mt-4 mb-2" role="alert">เพิ่มข้อมูล</div>
    <div class="row">
        <div class="col-sm-6">
    <form method = "POST" action="insert_member.php">
        
        <select name="test" class="form-control mt-4 mb-2" required>
            <option value="">=== เลือกพนักงานรับรถ ===</option>
            <?php foreach($result as $results){?>
            <option value="<?php echo $results["Empcar_id"];?>">
            <?php echo $results["Empcar_id"]; ?>
            </option>
            <?php } ?>
        </select>
        <select name="test2" class="form-control  mb-2" required>
            <option value="">=== เลือกพนักงานช่าง ===</option>
            <?php foreach($result2 as $results2){?>
            <option value="<?php echo $results2["Emp_id"];?>">
            <?php echo $results2["Emp_id"]; ?>
            </option>
            <?php } ?>
        </select>
        <select name="test3" class="form-control mb-2" required>
            <option value="">=== เลือกสี ===</option>
            <?php foreach($result3 as $results3){?>
            <option value="<?php echo $results3["Color_o"];?>">
            <?php echo $results3["Color_o"]; ?>
            </option>
            <?php } ?>
        </select>
        <select name="test5" class="form-control mb-2" required>
            <option value="">=== เลือกรหัสสี ===</option>
            <?php foreach($result5 as $results5){?>
            <option value="<?php echo $results5["Color_id"];?>">
            <?php echo $results5["Color_id"]; ?>
            </option>
            <?php } ?>
        </select>
        <select name="test4" class="form-control mb-2" required>
            <option value="">=== เลือกเฉดสี ===</option>
            <?php foreach($result4 as $results4){?>
            <option value="<?php echo $results4["Color_shades"];?>">
            <?php echo $results4["Color_shades"]; ?>
            </option>
            <?php } ?>
        </select>
        <div class="alert alert-dark text-center h5 mt-4 mb-2" role="alert">ข้อมูลลูกค้า</div>
        <label>รหัสลูกค้า :</label>
        <input type="text" name="id" class="form-control" placeholder="รหัส D01 ..." required>
        <label>ชื่อ :</label>
        <input type="text" name="fname" class="form-control" placeholder="ชื่อ..." required>
        <label>นามสกุล :</label>
        <input type="text" name="lname" class="form-control" placeholder="นามสกุล..." required>
        <label>เบอร์โทรศัพท์ :</label>
        <input type="text" name="tel" class="form-control" placeholder="เบอร์โทรศัพท์..." required>
        <label>ที่อยู่ :</label>
        <input type="text" name="add" class="form-control" placeholder="ที่อยู่..." required>
        
        </div>

        <!-- ////////////////////////////////////// -->
    
        <div class="col-sm-6">
        
        <div class="alert alert-dark text-center h5 mt-4 mb-2" role="alert">ข้อมูลรถยนต์</div>
        <label>รหัสการรับเข้ารถยนต์ :</label>
        <input type="text" name="car_id" class="form-control" placeholder="รหัสการรับเข้ารถยนต์ C01 ..." required>   
        <label>ยี่ห้อรถยนต์ :</label>
        <input type="text" name="brand" class="form-control" placeholder="ยี่ห้อรถยนต์..." required>
        <label>ประเภทรถ :</label>
        <input type="text" name="type" class="form-control" placeholder="ประเภทรถ..." required>
        <label>เลขทะเบียน :</label>
        <input type="text" name="carnum" class="form-control" placeholder="เลขทะเบียน..." required>
        <label>รุ่น :</label>
        <input type="text" name="model" class="form-control" placeholder="รุ่น..." required>
        <label>สีรถเดิม :</label>
        <input type="text" name="color" class="form-control" placeholder="สีรถเดิม..." required>
        </div>
    </div>
        

        <input type="submit" value="submit" class="btn btn-success mt-2 mb-5">
        <a href="show_member.php" class="btn btn-danger mt-2 mb-5 float-end">Cancel</a>
    </form>
    
</div>
</body>
</html>