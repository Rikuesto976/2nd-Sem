<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>20</title>
</head>
<body>
    <?php
        $text = "Hello, World!";
        $text = strtolower($text);

        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $vowelCount = 0;

        for ($i = 0; $i < strlen($text); $i++) 
        {
            $c = $text[$i];

            if (in_array($c, $vowels)) {
                $vowelCount++;
            }
        }

        echo "The number of vowels in the string is: " . $vowelCount;
    ?>
</body>
</html>