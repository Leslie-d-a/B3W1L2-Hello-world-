<?php
    define("textConst","Hello World!");
    $textVar = "Learning PHP";
    $textVar = textConst;
    $textHello = "Hello";
    $textWorld = "World!";
    $textArray = array("Hello", "World!");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "Hello World!"; ?></h1>
    <h1><?php echo textConst; ?></h1>
    <h1><?php echo $textVar; ?></h1>
    <h1><?php echo $textHello," ",$textWorld; ?></h1>
    <h1><?php echo implode(" ", $textArray); ?></h1>
</body>
</html>