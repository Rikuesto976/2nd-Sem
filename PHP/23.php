<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>23</title>
</head>
<body>
    <table border="1px">
        <tr>
            <th>S.N. </th>
            <th>Square Root </th>
            <th>Square </th>
            <th>Cube </th>
            <th>Quad 4</th>
        </tr>
        <?php
            
            for ($i=1; $i<=10; $i++)
            {
                echo "<tr>";
                echo "<td> $i </td>";
                echo "<td> ". sqrt($i) . "</td>";
                echo "<td>" . pow($i, 2) . "</td>";
                echo "<td>" . pow($i, 3) . "</td>";
                echo "<td>" . pow($i, 4) . "</td>";
                echo "</tr>";
            }
            
        ?>
    </table>
</body>
</html>