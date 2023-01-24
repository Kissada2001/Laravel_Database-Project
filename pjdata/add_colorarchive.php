
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
            
        <form method = "POST" action="insert_colorarchive.php">

        <div class="alert alert-dark text-center h5 mt-4 mb-2" role="alert">ข้อมูลคลังเก็บสี</div>
        <label>รหัสสี :</label>
        <input type="text" name="cid" class="form-control" placeholder="รหัสสี..." required>
        <label>สี :</label>
        <input type="text" name="color" class="form-control" placeholder="สี..." required>
        <label>เฉดสี :</label>
        <input type="text" name="Color_shades" class="form-control" placeholder="เฉดสี..." required>
        <label>ประเภทของสี :</label>
        <input type="text" name="ctype" class="form-control" placeholder="ประเภทของสี..." required>
        <label>ยี่ห้อสี :</label>
        <input type="text" name="cbrand" class="form-control" placeholder="ยี่ห้อสี..." required>
        <label>ราคาสี :</label>
        <input type="number" name="cprice" class="form-control" placeholder="ราคาสี..." required>
        <input type="submit" value="submit" class="btn btn-success mt-2 mb-5">
        <a href="show_member.php" class="btn btn-danger mt-2 mb-5 float-end">Cancel</a>
        </form>
        </div>
        <div class="col-sm-6">
        <img src="color-cover.jpg" class="img-fluid mt-4" width="100%" alt="...">
        </div>
    </div>
</div>
</body>
</html>