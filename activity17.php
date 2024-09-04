<?php
$numbers = [3, 7, 2, 8, 1, 4, 10, 5];
$oddNumbers = [];
foreach($numbers as $v) {
    if($v % 2 != 0) {
        $oddNumbers[] = $v;
    }
}

$squaredNumbers = [];
foreach($oddNumbers as $v) {
    $squaredNumbers[] = $v * $v;
}

rsort($squaredNumbers);

$sum = 0;
foreach($squaredNumbers as $v) {
    $sum += $v;
}

echo print_r($oddNumbers);
echo print_r($squaredNumbers,true);
echo $sum;
?>
