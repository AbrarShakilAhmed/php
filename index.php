<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label for="username" >Username</label>
    <input type="text" name="name" required>
    <br>
    <label for="pass">Password</label>
    <input type="password" name="pass" id="" required>
    <br>
    <button type="submit">Submit</button>
  </form>
</body>
</html>
<?php
$name = filter_input(INPUT_POST,"name",FILTER_SANITIZE_SPECIAL_CHARS);
echo $name . "<br>";
echo $_POST["pass"]

?>