<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9</title>
</head>
<body>
    <?php
        echo strlen("Hello world!");
        echo "<br>";

        echo str_word_count("Hello world!");
        echo "<br>";

        echo strpos("Hello world!", "world");
        echo "<br>";

        $x = "Hello World!";
        echo strtoupper($x);
        echo "<br>";

        $y = "Hello World!";
        echo strtoupper($y);
        echo "<br>";  
        
        $a = "Hello World!";
        echo str_replace("World", "Dolly", $a);
        echo "<br>";

        $b = "Hello World!";
        echo strrev($b);
        echo "<br>";

        $c= " Hello World! ";
        echo trim($c);
        echo "<br>";

        $x = "Hello";
        $y = "World";
        $z = $x . $y;
        echo $z;    
    ?>
</body>
</html>