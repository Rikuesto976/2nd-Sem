<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11</title>
</head>
<body>
    <?php
        //Foreach Loop
        $a = [1, 2, 'apple', true, 12.32];
        echo "<pre>";
        print_r($a);
        echo "</pre>";

        echo "<br>";

        foreach($a as $k => $v)
        {
            echo "$k = $v";
            echo "<br>";
        }


        //For Loop
        for ($i=0; $i<5; $i++)
        {
            for ($j=0; $j<$i+1; $j++ )
            {
                echo "*";                
            }
            echo "<br>";
        }
    ?>
</body>
</html>