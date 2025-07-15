<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12</title>
</head>
<body>
    <?php
       function fact($a)
       {
            $b=1;
            for ($i = 1; $i<=$a; $i++)
            {
                $b *= $i;
            }
        return $b;
       }

        echo fact(5);
    ?>
</body>
</html>