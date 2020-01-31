<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comparison Examples</title>
    <!-- 
        Author: Angelina Stilphen
        Date: 1.29.20
        Exercise 02_01_01
     -->
</head>
<body>
    <?php
    echo "<p>";
    echo "<h2>Relational Equal Operator</h2>";
    $value1 = "first text string";
    $value2 = "second text string";
    $returnValue = ($value1 == $value2 ? "true" : "false");
    echo 'value1: ', $value1, ' $value2: ', $value2, '<br>';
    echo 'After $value1 == $value2 $returnValue is: ',
        $returnValue, "<br>";
    echo "<h2>Relational Equal Operator</h2>";
    $value1 = 50;
    $value2 = 75;
    $returnValue = ($value1 == $value2 ? "true" : "false");
    echo '$value1: ', $value1, ' $value2: ', $value2, '<br>';
    echo 'After $value1 == $value2 $returnValue is: ',
        $returnValue, "<br>";
    echo "<h2>Relational Not Equal Operator</h2>";
    $returnValue = ($value1 != $value2 ? "true" : "false");
    echo '$value1: ', $value1, ' $value2: ', $value2, '<br>';
    echo 'After $value1 != $value2 $returnValue is: ',
        $returnValue, "<br>";
    echo "<h2>Relational Alternative Not Equal Operators</h2>";
    $returnValue = ($value1 <> $value2 ? "true" : "false");
    echo 'value1: ', $value1, ' $value2: ', $value2, "<br>";
    echo 'After $value1 <> $value2 $returnValue is: ', 
        $returnValue, "<br>";
    echo "<h2>Relational Greater Than Operator</h2>";
    $returnValue = ($value1 > $value2 ? "true" : "false");
    echo '$value1: ', $value1, '$value2: ', $value2, "<br>";
    echo 'After $value1 > $value2 $returnValue is: ',
        $returnValue, "<br>";
    echo "<h2>Relational Less Than Operator</h2>";
    $returnValue = ($value1 < $value2 ? "true" : "false");
    echo '$value1: ', $value1, '$value2: ', $value2, "<br>";
    echo 'After $value1 < $value2 $returnValue is: ',
        $returnValue, "<br>";
    echo "<h2>Relational Greater Than Or Equal To Operator</h2>";
    $returnValue = ($value1 >= $value2 ? "true" : "false");
    echo '$value1: ', $value1, '$value2: ', $value2, "<br>";
    echo 'After $value1 >= $value2 $returnValue is: ',
        $returnValue, "<br>";
    echo "<h2>Relational Less Than Or Equal To Operator</h2>";
    $returnValue = ($value1 <= $value2 ? "true" : "false");
    echo '$value1: ', $value1, '$value2: ', $value2, "<br>";
    echo 'After $value1 <= $value2 $returnValue is: ',
        $returnValue, "<br>";
    echo "<h2>Relational Equal Values and Same Data Type Operator</h2>";
    $returnValue = ($value1 === $value2 ? "true" : "false");
    echo '$value1: ', $value1, '$value2: ', $value2, "<br>";
    echo 'After $value1 === $value2 $returnValue is: ',
        $returnValue, "<br>";
    echo "<h2>Relational Equal Values and Not Same Data Type Operator</h2>";
    $returnValue = ($value1 !== $value2 ? "true" : "false");
    echo '$value1: ', $value1, '$value2: ', $value2, "<br>";
    echo 'After $value1 !== $value2 $returnValue is: ',
        $returnValue, "<br>";
    
    echo "<h2>The gettype() Function</h2>";
    echo 'After gettype($returnValue) call: ',
        gettype($returnValue), "</p>";
    ?>
</body>
</html>