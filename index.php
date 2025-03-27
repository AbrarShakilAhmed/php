<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    form{
      background-color: #ffff;
      width: 60%;
      margin: 100px auto;
      padding: 40px;
      text-align: center;
    }
    div{
      width: 80%;
      margin: 0 auto;
      text-align: center;
      background-color: #ffff;
    }
    body{
      background-color: #f4f4f4;
    }
  </style>
</head>
<body>
  <form action="index.php" method="post">
    <label for="username" >Safe input</label>
    <input type="text" name="name" required>
    <br>
    <br>
    <label for="pass">Bugs input</label>
    <input type="text" name="pass" id="" required>
    <br>
    <br>
    <br>
    <button type="submit">Submit</button>
  </form>
  <div>
    <h1>Output</h1>
    <?php
$name = filter_input(INPUT_POST,"name",FILTER_SANITIZE_SPECIAL_CHARS);
echo $name . "<br> <br>";
echo $_POST["pass"]

?></div>

</body>
</html>
