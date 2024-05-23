<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=hello, initial-scale=1.0">
    <link href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css" rel="stylesheet">
    <title>系统管理</title>
</head>
<body>

<div class="input-group">
    <form action="search.php" method="post">
        <div class="row">
    <div class="col"><input type="text" class="form-control" placeholder="学号 " name="uid"></div>
    <div class="col"><input type="submit" class="input-group-addon btn btn-primary" value="搜索"></div>
    </div>
    </form>
</div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">学号</th>
                <th scope="col">姓名</th>
                <th scope="col">手机号</th>
                <th scope="col">年龄</th>
                <th scope="col">性别</th>
                <th scope="col">地址</th>
                <th scope="col">身份证</th>
                <th scope="col">院系</th>
                <th scope="col">身份</th>
                <th scope="col">操作</th>
            </tr>
        </thead>
        <tbody>
<?php
            require("../connect.php"); 
            $sql = "SELECT * FROM `stuinfo` ORDER BY `uid` ASC";
            $result=$conn->query($sql);
            while($row= $result->fetch_assoc()) {
                echo("<tr>
                <th scope='row'>".$row['uid']."</th>
                <td>".$row['uname']."</td>
                <td>".$row['uphone']."</td>
                <td>".$row['age']."</td>   
                <td>".$row['sex']."</td>
                <td>".$row['address']."</td>
                <td>".$row['id']."</td>
                <td>".$row['department']."</td>
                <td>".$row['status']."</td>
                <td><a class='btn btn-info' href='update.php?uid=".$row['uid']."'>修改</a>&nbsp<a class='btn btn-danger' href='delete.php?uid=".$row['uid']."'>删除</a></td>
            </tr>");
            }
        ?>
        </tbody>
    </table>
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">首页</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">下一页</a></li>
      </ul>
</body>
</html>