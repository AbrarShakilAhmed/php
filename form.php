<?php
  $name =$_POST["name"];
  $email = $_POST["email"];
  $pass =$_POST["pass"];
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logined</title>
  <link rel="shortcut icon" href="./Place Your Image.png" type="image/x-icon">
</head>
<body>
  <ul>
    <li>Your name is :  <?php echo $name ?></li>
    <li> Your email is : <?php echo $email ?></li>
    <li>Your Password is : <?php echo $pass ?></li>
  </ul>
  <a href="https://localhost/php"><button>Back</button></a>
</body>
</html>
