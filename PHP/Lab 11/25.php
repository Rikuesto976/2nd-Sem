<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>25</title>
</head>
<body>
    <form action="" method="POST">
        Name: <input type="text" name="name">

        <input type="submit" value="Submit">
    </form>

    <?php
        $greet = $_POST['name'];
        
        echo "Hello! ".$greet;
    ?>
</body>
</html>