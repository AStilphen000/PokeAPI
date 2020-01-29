<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Math</title>
    <!-- 
        Author: Angelina Stilphen
        Date: 1.27.20
        Exercise 02_01_01
     -->
</head>
<body>
    <h1>This is some math</h1>
    <?php
    // addition 
    $x = 100;
    $y = 200;
    $returnValue = $x + $y;
    echo "<h2>Addition</h2>";
    echo '<p>returnValue after addition expression: ', 
        $returnValue, "</p>";
    // Subtraction
    $x = 10;
    $y = 6;
    $returnValue = $x - $y;
    echo "<h2>Subtraction</h2>";
    echo '<p>$returnValue after subtraction expression: ',
        $returnValue, "</p>";
    // Multiplication
    $x = 2;
    $y = 6;
    $returnValue = $x * $y;
    echo "<h2>Multiplication</h2>";
    echo '<p>$returnValue after multiplication expression: ',
        $returnValue, "</p>";
    // Division
    $x = 24;
    $y = 3;
    $returnValue = $x / $y;
    echo "<h2>Division</h2>";
    echo '<p>$returnValue after division expression: ',
        $returnValue, "</p>";
    // Modulus 
    $x = 3;
    $y = 2;
    $returnValue = $x % $y;
    echo "<h2>Modulus</h2>";
    echo '<p>$returnValue after modulus expression: ',
        $returnValue, "</p>";



    // Unary Operators 
    echo "<h2>Unary Increment: Prefix Notation</h2>";
    $studentID = 100;
    $curStudentID = ++$studentID;
    echo "The First Student ID is: ", $curStudentID, "<br>";
    $curStudentID = ++$studentID;
    echo "The Second Student ID is: ", $curStudentID, "<br>";
    $curStudentID = ++$studentID;
    echo "The Third Student ID is: ", $curStudentID, "<br>";

    echo "<h2>Unary Increment: Postfix Notation</h2>";
    $studentID = 100;
    $curStudentID = $studentID++;
    echo "The First Student Increment ID is: ", $curStudentID, "<br>";
    $curStudentID = $studentID++;
    echo "The Second Increment ID is: ", $curStudentID, "<br>";
    $curStudentID = $studentID++;
    echo "The Third Increment ID is: ", $curStudentID, "<br>";

    echo "<p>";
    // Compound Addition Assignment 
    echo "<h2>Compound Addition Assignment</h2>";
    $changingVar = 100;
    $changingVar += 50;
    echo '$changingVar = 100 <br>';
    echo 'After $changingVar += 50: ', $changingVar, "<br>";
    // Compound Subtraction Assignment  
    echo "<h2>Compound Subtraction assignment</h2>";
    $changingVar -= 30;
    echo 'After $changingVar -= 30: ', $changingVar, "<br>";
    // Compound Division Assignment 
    echo "<h2>Compound Division Assignment</h2>";
    $changingVar /= 3;
    echo 'After $changingVar /= 3: ', $changingVar, "<br>";
    // Compound Multiplication Assignment 
    echo "<h2>Compound Multiplication Assignment</h2>";
    $changingVar *= 8;
    echo 'After $changingVar *= 8: ', $changingVar, "<br>";
    // Compound Modulus Assignment
    echo "<h2>Compound Modulus Assignment</h2>";
    $changingVar %= 300;
    echo 'After $changingVar %= 300: ', $changingVar, "<br>";
    // Compound Concatenation Assignment
    echo "<h2>Compound Concatenation Assignment</h2>";
    $changingVar = "those who remember the past are 
    condemned to repeat it.";
    $changingVar .= ' - Santayana';
    echo '$changingVar = Those who do not remember the past are
    condemned to repeat it. <br>';
    echo 'After $changingVar .= "- Santayana": ', $changingVar, "</p>";
    ?>
</body>
</html>