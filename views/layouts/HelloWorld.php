<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World</title>
    <!-- 
        Author: Angelina Stilphen
        Date: 1.16.20
        Exercise 02_01_01
     -->
</head>
<body>
<?php
    $worldVar = "World";
    $sunVar = "Sun";
    $moonVar = "Moon";
    $worldInfo = 92897000;
    $sunInfo = 72000000;
    $moonInfo = 3456;
    ?>
    
    <?php
    echo "<p>Hello $worldVar!<br>";
    echo "The $worldVar is $worldInfo miles from the $sunVar.<br>";
    echo "Hello", $sunVar, "!<br>";
    echo "Hello", $moonVar, "!<br>";
    echo "The $moonVar is $moonInfo miles in diameter. </p>";
    ?>
</body>
</html>