    <!-- Anurodh Kanth -->

    <!-- dbconnect.php file -->
<?php
    $conn = mysqli_connect('localhost', 'root', '', 'swdaysession');

    if (!$conn)
    {
        echo die("database is not connected");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Destroy</title>
</head>
<body>
    <h1>Anurodh Kanth</h1>
    <h1>dbconnect</h1>
</body>
</html>