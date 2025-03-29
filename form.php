<?php
  $name =$_POST["name"];
  $email = $_POST["email"];
  $pass =$_POST["pass"];


$hashed_password = '$6$rounds=1000000$NJy4rIPjpOaU$0ACEYGg/aKCY3v8O8AfyiO7CTfZQ8/W231Qfh2tRLmfdvFD6XfHk12u6hMr9cYIA4hnpjLNSTRtUwYr9km9Ij/';


$crtNameHash ='$6$rounds=1000000$NJy4rIPjpOaU$ZzVfunJnDQyi0Jz3HSs3LZXcbX85xCM5t264l7/ov9C1z3KDs5ntMU136GQm6dKPOS8p/tw0yYTGpZeOfQozs/';

$crtPassHash ='$6$rounds=1000000$NJy4rIPjpOaU$0dqjdufHu/zIBTXvgoWRcQceYzWmPBFErciyIdIeGF8L.JCg85bqBtK6.B5B8bqmtoU7Tr7nW46w9hhK3wMR9/';

$crtEmailHash ='$6$rounds=1000000$NJy4rIPjpOaU$fDAFH4KR7W.AhDoh8WjlvUzYgPMU30YvCLR67N9ga5AEodPbWCHsr9HAiR0KxOlEygL09A5UYXBQSe3sBVAoR0';


if(hash_equals($crtNameHash,crypt($name,$hashed_password))){
  if(hash_equals($crtEmailHash,crypt($email,$hashed_password))){
    if(hash_equals($crtPassHash,crypt($pass,$hashed_password))){
      echo " <h1>You have loged in</h1>";
    }else{
      echo "pass is wrong <script>alert('Password is not matched')</script>";
    }
  }else{
    echo "email is wrong <script>alert('email is not matched')</script>";
  }
}else{
  echo "name is wrong <script>alert('name is not matched')</script>";
}

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
