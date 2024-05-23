<?php
    $uid=$_GET['uid'];
    require("../connect.php"); 
    $sql = "UPDATE `stumembership`.`stuinfo` SET `status` = '预备党员' WHERE `stuinfo`.`uid` = $uid;";
    $result=$conn->query($sql);
    header("Location:system.php");
    ?>