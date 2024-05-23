<?php
    $theme=$_POST["theme"];
    $name=$_POST['name'];
    $content=$_POST['content'];
    require("../connect.php"); 
    $sql = "INSERT INTO `stumembership`.`notice` (`theme`, `name`, `content`) VALUES ('$theme', '$name', '$content' );";
    $result=$conn->query($sql);
    header("Location:system.php");
?>