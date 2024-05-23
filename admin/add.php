<?php
    $uid=$_GET["uid"];
    require("../connect.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="hidden" name="uid" value=<php?echo($uid) ?>>
        <input type="text" name="">
        
        <input type="submit" value="">
    </form>
</body>
</html>
<?php
    $username=$_POST["123"];
    echo $uid.$username;
    $sql = "INSERT INTO `stumembership`.`user` (`uid`, `uname`, `upassword`) VALUES (\'20184004\', \'刘磊\', \'184004\');";
    $result=$conn->query($sql);
    header("adminindex.php");
?>