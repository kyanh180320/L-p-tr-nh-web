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
        Person 1's Name: <input type="text" name="name1" required><br>
        Person 1's Date Of Birth: <input type="date" name="birthday1" required><br>
        Person 2's Name: <input type="text" name="name2" required><br>
        Person 2's Date Of Birth: <input type="date" name="birthday2" required><br>
        <input type="submit">
    </form>
    <?php
        if(isset($_POST['name1']) && isset($_POST['birthday1']) && isset($_POST['name2']) && isset($_POST['birthday2'])) {
            $birthday1 = date_create($_POST["birthday1"]);
            $birthday2 = date_create($_POST["birthday2"]);
            $currentDate = date_create();
            $age1 = date_diff($currentDate, $birthday1);
            $age2 = date_diff($currentDate, $birthday2);
            print("Person 1's Date of Birth: " . date_format($birthday1, "l, F j, Y") . "<br>");
            print("Person 2's Date of Birth: " . date_format($birthday2, "l, F j, Y") . "<br>");
            print("Difference in days between 2 dates: " . date_diff($birthday1, $birthday2)->format("%a days") . "<br>");
            print("Person 1' Age: " . $age1->format("%y years old") . "<br>");
            print("Person 2' Age: " . $age2->format("%y years old") . "<br>");
            print("Difference years between 2 persons: " . date_diff($birthday1, $birthday2)->format("%y years"));
        }
    ?>
</body>
</html>