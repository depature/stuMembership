<?php
    // if(!session_id())session_start();
    // session_destroy();
    require("connect.php"); 
    $username=$_POST["username"];
    $password=$_POST["password"];
    $status=$_POST["status"];
    if($status=="user"){
        $sql = "SELECT upassword FROM `user` where uid=$username";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
        if($row["upassword"]==$password)
         {  
            setcookie("user", $username, time()+3600);  
            echo("<script type='text/javascript'> window.location.href='http://localhost/stuMembership/user/userindex.php?uid=$username'; </script>");
            }
        else{
            echo("<script>alert('用户名或密码错误');window.history.back(-1);</script>");
        }
    }
    else if($status=="admin"){
        $sql = "SELECT apassword FROM `admin` where aid=$username";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
        if($row["apassword"]==$password)
        echo("<script type='text/javascript'> window.location.href='http://localhost/stuMembership/admin/adminindex.php'; </script>");
        else{
            echo("<script>alert('用户名或密码错误');window.history.back(-1);</script>");
        }
    }
    
?>