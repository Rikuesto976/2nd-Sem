<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        x: <input type="number" name="n1"> <br>

        n: <input type="number" name="n2"> <br>

        <input type="submit" name="submit" id="">
    </form>

    <?php
        $a = $_POST['n1'];
        $b = $_POST['n2'];

        echo "Adding: ".$a+$b;
        echo "<br>";
        
        echo "Subtracting: ".$a-$b;
        echo "<br>";
        
        echo "Multiplying: ".$a*$b;
        echo "<br>";
    
        echo "Dividing: ".$a/$b;
        echo "<br>";

        echo "Modulus: ".$a%$b;
        echo "<br>";

        echo "Power x^n: ".pow($a, $b);
    ?>
</body>
</html>