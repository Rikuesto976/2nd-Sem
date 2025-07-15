<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>21</title>
</head>
<body>
    <?php
        $integer = 12;

        $string = (string)$integer;
        echo "Integer $integer cast to String '$string' <br>";

        $float = (float)$integer;
        echo "Integer $integer cast to Float $float.00 <br>";

        $boolean = (boolean)$integer;
        echo "Integer $integer cast to Boolean $boolean <br>";

        $array = (array)$integer;
        echo "Integer $integer cast to Array '$array' <br>";

    ?>
</body>
</html>