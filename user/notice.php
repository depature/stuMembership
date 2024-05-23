<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>查看通知</title>
</head>
    <?php
        require("../connect.php"); 
        $sql = "SELECT * FROM `notice` ";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){
          $theme=$row["theme"];
          $name=$row["name"];
          $content=$row["content"];
        };
        ?>
            <figure class="text-center">
        <blockquote class="blockquote">
          <h1 align="center"><b><?php echo $theme;?></b></h1>
        </blockquote>
        <figcaption class="blockquote-footer">
             <cite title="Source Title"><?php echo $name;?></cite>
        </figcaption>
      </figure>
      <p style="text-align: center;margin-left: 20%;margin-right: 20%;"><?php echo $content;?></p>
</body>
</html>