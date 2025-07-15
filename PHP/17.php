<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17</title>
</head>
<body>
    <?php
function calculateArraySum($array) {
  $sum = 0;

  foreach ($array as $element) {
    $sum += $element;  
  }

  return $sum;  
}

 
$numbers = array(1, 2, 3, 4, 5);
$total = calculateArraySum($numbers);

echo "The sum of the array elements is: " . $total;  
?>
</body>
</html>