<?php
$d=readline("Enter regular,yes or not: ");
$a=readline("Enter the amount: ");
if($a>500 && $d=="yes"){
  echo "Discount amount is: ", ($a-($a*0.2));
} else if($d=="yes" && $a<=500){
  echo "Discount amount is: ", ($a-($a*0.1));

}else if($d=="no"&& $a>500){
  echo "Discount amount is: ", ($a-($a*0.05));

} else{
  echo "No discount";
}
?>