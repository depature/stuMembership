<?php

$uid=$_GET["uid"];
$uname=$_GET["name"];
$upassword=$_GET["pswd"];
require("../connect.php");
$sql = "INSERT INTO `stumembership`.`user` (`uid`, `uname`, `upassword`) VALUES ($uid,'$uname',$upassword);";
$result=$conn->query($sql);
$sql="INSERT INTO `stumembership`.`stuinfo` (`uid`, `uname`, `uphone`, `id`, `department`, `status`) VALUES ($uid, '$uname', '', '', '', '团员')";
$result=$conn->query($sql);
header("Location:user.html");
?>