<?php
$n = readline("Enter the numebr of patterns you want: ");

for ($i = 1; $i <= $n; $i++) {  
    for ($j = 0; $j < $i; $j++) { 
      echo $i;
    }
    echo "\n";
 }
?>