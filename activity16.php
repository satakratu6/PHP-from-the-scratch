<?php
$a=readline("Enter first no: ");
$b=readline("Enter second no: ");
while($b>0){
  $temp=$b;
  $b=$a%$b;
  $a=$temp;
} 
echo "$a";
?>