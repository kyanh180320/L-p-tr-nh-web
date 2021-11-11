<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <font>Thank You: Got your input.</font>
  <br>
  <?php
  $email = $_POST['email'];
  $name = $_POST['name'];
  $class = $_POST['class'];
  $university = $_POST['university'];
  $hobbies = $_POST['hobbies'];
  $introduction = $_POST['introduction'];
  $listHobbies = "";
  foreach ($hobbies as $hobbiesArr => $value) {
    $listHobbies .= $value . ", ";
  }
  print("<br>Your email address is $email");
  print("<br>Your name is $name");
  print("<br>Your class is $class");
  print("<br>Your university is $university");
  print("<br>Your hobbies are $listHobbies");
  print("<br>Your introduction is $introduction");
  ?>
</body>

</html>