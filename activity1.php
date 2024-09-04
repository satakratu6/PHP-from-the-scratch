<?php
$a=readline();
$b=readline();
$c=readline();
$d=readline();
$e=readline();
echo "Result: ", ($a+$b)*$c/$d-$e, "\n";
echo $a+=$b, "\n";
echo $a-=$b,"\n";
echo $a*=$b, "\n";
echo $a%=$b, "\n";
echo $a/=$b,"\n";
$num=1;
echo $num++,"\n";
echo $num--,"\n";
$n1=$n2=$n3=$n4=5;
echo "The values of multiple variables: ",$n1,$n2,$n3,$n4,"\n";
$username = readline("Enter your name: ");
echo ($username == NULL) ? "No name" : "Welcome $username";
?>