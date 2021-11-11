<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        Your name: <input type="text" name="name"><br>
        Date: 
        <select name="day">
            <?php
                for($i = 1; $i <= 31; $i++) {
                    print("<option>" . $i . "</option>");
                } 
            ?>
        </select>
        <select name="month">
            <?php
                for($i = 1; $i <= 12; $i++) {
                    print("<option>" . $i . "</option>");
                } 
            ?>
        </select>
        <select name="year">
            <?php
                for($i = 0; $i <= 2021; $i++) {
                    print("<option>" . $i . "</option>");
                }  
            ?>
        </select><br>
        Time: 
        <select name="hour">
            <?php
                for($i = 0; $i <= 23; $i++) {
                    print("<option>" . $i . "</option>");
                }  
            ?>
        </select>
        <select name="minute">
            <?php
                for($i = 0; $i <= 59; $i++) {
                    print("<option>" . $i . "</option>");
                }  
            ?>
        </select>
        <select name="second">
            <?php
                for($i = 0; $i <= 59; $i++) {
                    print("<option>" . $i . "</option>");
                }  
            ?>
        </select><br>
        <input type="submit">
        <input type="reset">
    </form>
    <?php 
        if(isset($_POST['name'])) {
            print("Hello " . $_POST['name'] . "!<br>");
        }
        if(isset($_POST['hour'])) {
            print("You have choose to have an appointment on " . $_POST['hour'] . ":" . $_POST['minute'] . ":" . $_POST['second'] 
            . ", " . $_POST['day'] . '/' . $_POST['month'] . '/' . $_POST['year'] . "<br>"); 
            print("More information<br>");
        }
        if(isset($_POST['hour'])) {
            if($_POST['hour'] >= 12) {
                print("In 12 hours, the time and date is " . $_POST['hour'] % 12 . ":" . $_POST['minute'] . ":" . $_POST['second'] 
                . " PM, " . $_POST['day'] . '/' . $_POST['month'] . '/' . $_POST['year'] . "<br>");
            }
            else {
                print("In 12 hours, the time and date is " . $_POST['hour'] . ":" . $_POST['minute'] . ":" . $_POST['second'] 
                . " AM, " . $_POST['day'] . '/' . $_POST['month'] . '/' . $_POST['year'] . "<br>");
            } 
        }
        $even = [4, 6, 9, 11];
        if(isset($_POST['month'])) {
            if($_POST['month'] == 2) {
                print("This month has 29 days<br>");
            }
            else if(in_array($_POST['month'], $even)) {
                print("This month has 30 days<br>");
            }
            else {
                print("This month has 31 days<br>");
            }
        } 
    ?>
</body>
</html>