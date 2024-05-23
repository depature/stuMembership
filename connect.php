<?php
$hostname="localhost";
$username="root";
$password="";
$database="stumembership";
$conn=new mysqli($hostname,$username,$password,$database);
if($conn->connect_error){
    die("无法连接至数据库".$conn->$connect_error);
}
?>