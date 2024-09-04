<?php
$fact = 1;
$n = readline("Enter the number: ");

for ($i = 1; $i <= $n; $i++) {
    $fact = $fact * $i;
}

echo "Factorial of $n is: $fact\n";
?>
