<?php
    $uid=$_GET["uid"];
    require("../connect.php");
    //$sql = "DELETE from `stumembership`.`stuinfo` where uid=$uid;";
    $sql = "UPDATE `stumembership`.`stuinfo` SET `uphone` = '', `age`='',`sex`='',`address`='',`id` = '', `department` = '' WHERE `stuinfo`.`uid` = $uid;";
    $result=$conn->query($sql);
    header("Location:system.php");
?>