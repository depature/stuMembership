<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>入党管理系统</title>
</head>
<body>
    <?php
        if(!session_id())session_start();
        require("connect.php");    
    ?>
        <div class="box">
            <h2>入党管理系统系统登录</h2>
  <form action="login.php" method="post">
    <div class="inputBox">
      <input type="text" name="username" required="">
      <label>用户名</label>
    </div>
    <div class="inputBox">
		<input type="password" name="password" required="">
		<label>密码</label>
    </div>
    <div class="select">
        <input type="radio" name="status" value="user" id="1"><label for="1">学生</label>
        <input type="radio" name="status" value="admin" id="2"><label for="2">管理员</label>
    </div>
    <input type="submit" name="" value="登录">
	  </form>
	</div>
</body>
</html>