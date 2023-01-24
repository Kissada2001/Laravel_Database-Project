
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
    <form method = "POST" action="insert_Employee.php">

        
        <div class="alert alert-dark text-center h5 mt-4 mb-2" role="alert">ข้อมูลพนักงานช่าง</div>
        <label>รหัสพนักงานช่าง :</label>
        <input type="text" name="mid" class="form-control" placeholder="รหัสพนักงานช่าง M01..." required>
        <label>ชื่อของพนักงานช่าง :</label>
        <input type="text" name="mname" class="form-control" placeholder="ชื่อของพนักงานช่าง..." required>
        <label>เบอร์โทรศัพท์ :</label>
        <input type="text" name="mtel" class="form-control" placeholder="เบอร์โทรศัพท์..." required>
        <label>ที่อยู่พนักงานช่าง :</label>
        <input type="text" name="madd" class="form-control" placeholder="ที่อยู่พนักงานช่าง..." required>
        <label>เพศ :</label>
        <input type="text" name="msex" class="form-control" placeholder="เพศ..." required>
        <label>เงินเดือน :</label>
        <input type="number" name="msalary" class="form-control" placeholder="เงินเดือน..." required>
        <label>อายุ :</label>
        <input type="number" name="mage" class="form-control" placeholder="อายุ..." required>
    
    
    
        

        <input type="submit" value="submit" class="btn btn-success mt-2 mb-5">
        <a href="show_member.php" class="btn btn-danger mt-2 mb-5 float-end">Cancel</a>
    </form>
    
</div>
</body>
</html>