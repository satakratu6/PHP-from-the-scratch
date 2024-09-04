<?php
$sum=0;
$n=readline("Enter the number  you want: ");
for($i=1;$i<=$n;$i++){
  $sum +=$i;
} 
echo "Sum of ", $n, "  natural numbers: ", $sum;
?>