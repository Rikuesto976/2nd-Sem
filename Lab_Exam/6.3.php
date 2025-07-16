    <!-- Anurodh Kanth -->

    <!-- Session Read File -->
<?php
    session_start();
    
    if (isset($_SESSION['visit']))
    {
        $_SESSION['visit']+=1;
        echo "You have visited this website <br> ";
        echo $_SESSION['visit'];
    }
    else{
        echo "Please Login";
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
    <h1>Session Read</h1>
</body>
</html>