<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/adminindex.css">
    <title>学生用户</title>
</head>
<?php
    $uid=$_GET["uid"];
    require("../connect.php");
    $sql="select * from stuinfo where uid=$uid";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
?>
<body>
	<div class="container">
		<div class="captain"><h1><b>入党管理系统</b></h1></div>
		<div class="menu">
            <p>你好,<?php echo($row['uname']);?></p>
            <ul>
            <li><a href="userinfo.php?uid=<?php echo($row["uid"]);?>" target="content">提交个人信息</a></li>
            <li><a href="application.html" target="content">提交入党申请书</a></li>
            <li><a href="report.html" target="content">提交思想报告</a></li>
            <li><a href="probationary.html" target="content">提交转正申请书</a></li>
            <li><a href="download.php" target="content">下载文件</a></li>
            <li><a href="notice.php" target="content">查看公告</a></li>
            <li><a href=".php" target="content"></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
        </ul></div>
        <div class="web">
            <iframe src="" name="content" frameborder="0" width="100%" height="100%"></iframe>
        </div>
	</div>
</body>
</html>