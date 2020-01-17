<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Environment info</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
        <h1>PHP Environment Info</h1>
        <p>This page was rendered with PHP version 
        <?php
        echo phpversion();
        ?>
        </p>
        <p>The PHP code was rendered with Zend Engine Version 
        <?php
        echo zend_version();
        ?>
        </p>
        <p>PHP's default MIME type is 
        <?php
        echo ini_get("default_mimetype");
        ?>
        </p>
        <p>The maximum allowable time of a PHP script is 
        <?php
        echo ini_get("max_execution_time");   
        ?>
        seconds.
        </p>
</body>
</html>