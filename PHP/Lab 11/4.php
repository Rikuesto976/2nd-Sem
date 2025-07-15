<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4</title>
    <style>
        
    </style>
</head>
<body>
    <table height="300px" width="300px" border="1px">
        <?php
            echo "<b><u>Chess</u></b>";
            echo "<br>";

            for ($r = 1; $r <= 8; $r++) {
                echo "<tr>";
                for ($c = 1; $c <= 8; $c++) {
                    $sum = $r + $c;
                    if ($sum % 2 == 0) {
                        echo "<td bgcolor='black'></td>";
                    } else {
                        echo "<td bgcolor='white'></td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>