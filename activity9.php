<?php
echo "Choose type of electricity: \n1: Residential\n2: Commercial\n3: Industrial\n";
$a=readline("Enter type: ");
$b=readline("Enter units: ");
switch($a){
  case 1:
    if($b<=100){
      echo "Total bill: ", ($b*0.5);
    } else if($b>100 && $b<=200){
      echo "Total bill: ", ($b*0.75);

    } else{
      echo "Total bill: ", ($b*1);

    }
    break;
  case 2:
    if($b>=200){
      echo "Total bill: ", ($b*1.5);
    } else{
      echo "Total bill: ", ($b*2);

    }
  case 3:
    echo "Total bill: ", ($b*2.5);
    break;
  default:
  echo "Wrong choice";
}

?>