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
            </tr>
        </thead>
        <tbody>
<?php
    $uid=$_POST["uid"];
        require("../connect.php"); 
            $sql = "SELECT * FROM `stuinfo` where uid=$uid";
            $result=$conn->query($sql);
            $row=$result->fetch_array();
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
        </tr>");
?>
</tbody>
    </table>
</body>
</html>