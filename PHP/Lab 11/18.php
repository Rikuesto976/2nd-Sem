<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>18</title>
</head>
<body>
   <?php
     $array = array('A', 'B','C', 'A');

     $unique = array_unique($array);

     echo "Original Array: ";
     print_r($array);
     echo "<br>";

     echo "Unique Array: ";
     print_r($unique);
   ?>
</body>
</html>