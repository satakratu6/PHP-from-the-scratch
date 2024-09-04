<?php
$a=readline("Enter your age: ");
$i=readline("Enter income: ");
if($i<10000){
  echo "No tax";
} else if($i>=10000 && $i<=20000){
  if($a>=65){
    echo "Tax amount: ", ($i*0.05);
  } else{
    echo "Tax amount: ", ($i*0.1);
  }
  
} else{
  if($a>=65){
    echo "Tax amount: ", ($i*1.5);


  } else{
    echo "Tax amount: ", ($i*0.2);

  }
}
?>