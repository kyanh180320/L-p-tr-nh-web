<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        Convert from: 
        <input type="radio" name="type" value="degree" required> Degree
        <input type="radio" name="type" value="radian"> Radian<br>
        Value: <input type="text" name="val" required><br>
        <input type="submit">
    </form>
    <?php
        if(isset($_POST['type']) && isset($_POST['val'])) {
            if($_POST['type'] == "degree") {
                print("Radian: " . (floatval($_POST['val']) / 180 * pi()));
            }
            else {
                print("Degree: ". (floatval($_POST['val']) / pi() * 180));
            }
        }
    ?>
</body>
</html>