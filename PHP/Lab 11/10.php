<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10</title>
</head>
<body>
    <?php
         //Indexed Array
        $a = [1, 2, 'apple', true, 12.32];
        // echo $a[2];

        echo "<pre>";
        print_r($a);
        echo "</pre>";

        echo "<br>";

        
        //Associative Array
        $a = ["Name"=>"Anu", "Age"=>30, "Gender"=>"Male"];
        echo "<pre>";
        print_r($a);
        echo "</pre>";

        echo $a["Age"];

        echo "<br>";
        echo "<br>";
        echo "<br>";

        //Multidimensional Array
        $b = [
            [1, "Ram ", 20, " Kathmandu"], 
            [2, "Anu ", 24, " Lalitieb"], 
            [3, "Rajdb ", 2, " KMano"],
            [4, "NOao ", 60, " Kathmandu"]
        ];
        foreach($b as $v1)
        {
            echo "<br>";
            foreach($v1 as $v2)
            {
                echo $v2;
            
            }
        }

        echo "<br>";
        echo "<br>";
        echo "<br>";
    ?>
</body>
</html>