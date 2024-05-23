<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="../css/adminindex.css">
    <title>管理首页</title>
</head>
<body>
	<div class="container">
		<div class="captain"><h1>学生入党在线管理系统</h1></div>
		<div class="menu">
            <p>你好，管理员</p>
            <ul>
            <li><a href="user.php" target="content">用户管理</a></li>
            <li><a href="system.php" target="content">系统管理</a></li>
            <li><a href="league.php" target="content">普通学生信息</a></li>
            <li><a href="activist.php" target="content">入党积极分子信息</a></li>
            <li><a href="probationary.php" target="content">预备党员信息</a></li>
            <li><a href="member.php" target="content">正式党员信息</a></li>
            <li><a href="upload.html" target="content">文件管理</a></li>
            <li><a href="noticeadd.html" target="content">发布公告</a></li>
            <li><a href="log.html" target="content">系统日志</a></li>
            <li><a href="statistics.php" target="content">系统统计</a></li>
        </ul></div>
        <div class="web">
            <iframe src="system.php" name="content" frameborder="0" width="100%" height="100%"></iframe>
        </div>
	</div>
</body>
</html>