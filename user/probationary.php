<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>转正申请书</title>
</head>
<body>
    
</body>
</html>
<?php
$filename=$_FILES['file']['name'];
$tmp_name=$_FILES['file']['tmp_name'];
$error=$_FILES['file']['error'];
$arr = pathinfo($filename);
//获取文件的后缀名
$ext_suffix = $arr['extension'];	
//设置允许上传文件的后缀
$allow_suffix = array("doc");
//判断上传的文件是否在允许的范围内（后缀）==>白名单判断
if(!in_array($ext_suffix, $allow_suffix)){
	//window.history.go(-1)表示返回上一页并刷新页面
	echo "<script>alert('上传的文件类型只能是doc');window.history.go(-1);</script>";
	exit();
}
$newfilename=$_COOKIE["user"].".".$ext_suffix;
echo($newfilename);
	// //检测存放上传文件的路径是否存在，如果不存在则新建目录
	// if (!file_exists('uploads')){
	// 	mkdir('uploads');
	// }
	// //为上传的文件新起一个名字，保证更加安全
	// $new_filename = date('YmdHis',time()).rand(100,1000).'.'.$ext_suffix;
	//将文件从临时路径移动到磁盘
    //require("../connect.php"); 
    //$sql = "INSERT INTO `stumembership`.`file` (`filename`) VALUES ('$filename');";
    //$result=$conn->query($sql);
	if (move_uploaded_file($tmp_name, '../zhuanzheng/'.$filename)){
		echo "<script>alert('文件上传成功！');window.history.go(-1);</script>";
	}else{
		echo "<script>alert('文件上传失败,错误码：$error');</script>";
	}
?>