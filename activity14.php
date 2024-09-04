<?php
$number = 12345;
$rev = 0;

while ($number > 0) {
    $rem = $number % 10;
    $rev = $rev * 10 + $rem;
    $number = (int)($number / 10); 
}

echo "Reversed number: " . $rev;
?>
