<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>22</title>
</head>
<body>
    <?php
        $list = [2, 6, 10, 8, 4, 7];
        $lang = ["PHP", "JS", "C", "CPP"];
        $days = ["Mon" => 2, "Tue" => 3, "Wed" => 4, "Thu" => 5];

        echo "Original Arrays:\n";
        print_r($list);
        print_r($lang);
        print_r($days);

        // 1. Delete an individual element 8 from the $list array
        $index = array_search(8, $list);
        if ($index !== false) {
            unset($list[$index]);
        }
        $list = array_values($list); // Reindex array
        echo "\nAfter deleting 8 from \$list:\n";
        print_r($list);

        // 2. Delete the last element from an array
        array_pop($list);
        echo "\nAfter deleting last element from \$list:\n";
        print_r($list);

        // 3. Delete the 1st element from the $lang array
        array_shift($lang);
        echo "\nAfter deleting 1st element from \$lang:\n";
        print_r($lang);

        // 4. Access last element from $lang array
        $lastLang = end($lang);
        echo "\nLast element of \$lang: $lastLang\n";

        // 5. Extract value from $days array
        $tueValue = $days["Tue"];
        echo "\nValue for 'Tue' from \$days: $tueValue\n";

        // 6. Extract key from $days array
        $keys = array_keys($days);
        echo "\nKeys from \$days:\n";
        print_r($keys);

        // 7. Access 3rd element from $list array
        if (isset($list[2])) {
            echo "\n3rd element from \$list: " . $list[2] . "\n";
        }

        // 8. Sort the $lang array in ascending order
        sort($lang);
        echo "\nSorted \$lang array:\n";
        print_r($lang);

        // 9. Check if value 20 exists in the $list array
        $exists = in_array(20, $list) ? "Yes" : "No";
        echo "\nDoes 20 exist in \$list? $exists\n";

        // 10. Calculate the size of the $lang array
        echo "\nSize of \$lang array: " . count($lang) . "\n";

        // 11. Calculate the sum of days in the $days array
        echo "\nSum of values in \$days array: " . array_sum($days) . "\n";

        // 12. Combine $list and $lang array
        $combined = array_merge($list, $lang);
        echo "\nCombined \$list and \$lang array:\n";
        print_r($combined);

        // 13. Display the $days array in tabular form
        echo "\n\$days array in tabular form:\n";
        echo str_pad("Day", 10) . "Count\n";
        echo str_repeat("-", 20) . "\n";
        foreach ($days as $day => $count) 
        {
            echo str_pad($day, 10) . "$count\n";
        }

        // 14. Reverse the $list array
        $reversedList = array_reverse($list);
        echo "\nReversed \$list array:\n";
        print_r($reversedList);
    ?>

</body>
</html>