<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5</title>
</head>
<body>
    <?php
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