<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World</title>
    <!-- 
        Author: Angelina Stilphen
        Date: 1.22.20
        Exercise hello world 2
     -->
</head>
<body>
<?php
    $worldVar = "World";
    $sunVar = "Sun";
    $moonVar = "Moon";
    define("WORLD_INFO", 92897000);
    define("SUN_INFO", 72000000);
    define("MOON_INFO", 3456);
    ?>
    
    <?php
    echo "<p>Hello $worldVar!<br>";
    echo "The $worldVar is ",number_format(WORLD_INFO,0)," miles from the $sunVar.<br>";
    echo "Hello", $sunVar, "!<br>";
    echo "The $sunVar's core tempature is approximatley ",number_format(SUN_INFO,2)," degrees Fahrenheit.<br>";
    echo "Hello", $moonVar, "!<br>";
    echo "The $moonVar is ",number_format(MOON_INFO,0)," miles in diameter. </p>";
   
    ?>
</body>
</html>