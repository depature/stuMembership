<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css" rel="stylesheet">
    <title>修改学生信息</title>
</head>
<?php
    $uid=$_GET["uid"];
    require("../connect.php"); 
            $sql = "SELECT * FROM `stuinfo` where id=$uid";
            $result=$conn->query($sql);
            $row=$result->fetch_assoc();
?>
    <body>
    <form action="update-1.php" method="post" class="form-horizontal">
      <div class="row">
        <input type="hidden" name="uid" value="<?php echo $uid;?>">
    <div class="col-4">
      <label for="uphone" class="form-label">手机号:</label>
      <input type="text" class="form-control" id="uphone" placeholder="请输入修改后手机号" name="uphone"> 
    </div>
    </div>
    <div class="row">
    <div class="col-4">
      <label for="age" class="form-label">年龄:</label>
      <input type="text" class="form-control" id="age" placeholder="请输入修改后年龄" name="age"> 
    </div>
    </div>
    <div class="row">
    <div class="col-4">
      <label for="sex" class="form-label">性别:</label>
      <input type="text" class="form-control" id="sex" placeholder="请输入修改后性别" name="sex"> 
    </div>
    </div>
    <div class="row">
    <div class="col-4">
      <label for="address" class="form-label">地址:</label>
      <input type="text" class="form-control" id="address" placeholder="请输入修改后地址" name="address"> 
    </div>
    </div>
    <div class="row">
    <div class="col-4">
      <label for="id" class="form-label">身份证:</label>
      <input type="text" class="form-control" id="id" placeholder="请输入修改后身份证" name="id">
    </div>
    </div>
    <div class="row">
    <div class="col-4">
        <label for="department" class="form-label">院系:</label>
        <input type="text" class="form-control" id="department" placeholder="请输入修改后院系" name="department">
      </div>
      </div>
    <div class="row">
      <br>
      <br>
      </div>
    <button type="submit" class="btn btn-primary">修改学生信息</button>
  </form>  
    </body>
    </html>