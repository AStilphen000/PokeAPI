<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Concerts</title>
    <!-- 
        Author: Angelina Stilphen
        Date: 1.27.20
        Exercise 02_01_01
     -->
</head>
<body>
    <h1>Summer 2020 Concert</h1>
    <h2>West mec palooza</h2>
    <?php
    $concerts = array(
        "J Cole",
        "T Swift",
        "Mr. Worldwide"
    );
    $concerts[] = "Tool";
    $concerts[] = "Kendrick Lamar";
    $concerts[] = "Weird Al";
    echo "<p>The following ", count($concerts)," concerts are scheduled:</p>";
    echo "$concerts[0]<br>";
    echo "$concerts[1]<br>";
    echo "$concerts[2]<br>";
    echo "$concerts[3]<br>";
    echo "$concerts[4]<br>";
    echo "$concerts[5]<br>";
    ?>
</body>
</html>