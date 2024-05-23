<?php
    $uid=$_POST["uid"];
    $uphone=$_POST["uphone"];
    $age=$_POST["age"];
    $sex=$_POST["sex"];
    $address=$_POST["address"];
    $id=$_POST["id"];
    $department=$_POST["department"];
    //echo $uid.$uphone.$age.$sex.$address.$id.$department;
    require("../connect.php"); 
       //更新bug
    $sql = "UPDATE `stumembership`.`stuinfo` SET `uphone` = '$uphone', `age`='$age',`sex`='$sex',`address`='$address',`id` = '$id', `department` = '$department' WHERE `stuinfo`.`uid` = $uid;";
    $result=$conn->query($sql);
    header("Location:system.php");
?>