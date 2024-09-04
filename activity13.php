<?php
$number = 12345;
$sum= 0;

while ($number > 0) {
    $digit = $number % 10;
    $sum+= $digit;
    $number = $number / 10;
}

echo "Sum of digits: " . $sum;
?>
