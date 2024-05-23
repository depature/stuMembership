<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<ul class="list-group">
  <li class="list-group-item">文件</li>
  <?php
            require("../connect.php"); 
            $sql = "SELECT * FROM `file`";
            $result=$conn->query($sql);
            while($row= $result->fetch_assoc()) {
                echo("<li class='list-group-item'><a href='../upload/".$row['filename']."'>".$row['filename']."</a></li>");
            }
        ?>
</ul>
    
</body>
</html>