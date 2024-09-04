<?php
// $color=array("red ","green ","black");
// $n=count($color);
// // echo $color[1];
// // for($i=0;$i<$n;$i++){
// //   echo $color[$i];
// // }
// foreach($color as $c){
//   echo $c;
// }
// $color=array("c1"=>"red ","c2"=>"green ","c3"=>"black");
// foreach($color as $key=>$val)
// {
//   echo $key,"=>" ,$val;
// }
// $keys=array_keys($color);
// $values = array_values($color);
// for ($i = 0; $i < count($values); $i++) {
//     echo $values[$i];
//     echo "<br>";
// }
$color=array('white','green','red','blue','black');
// $sentence="The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1], the $color[0] house, the leaden sky. The new president and his first lady.- Richard M. Nixon" ;
// echo $sentence;
// echo "<ul>";
// foreach($color as $v){
//   echo "<li>";
//   echo $v;
//   echo "</li>";
// }
// echo "</ul>";
$students=array("Neha"=>90, "Sneha"=>78, "Sayan"=>85,"Piyush"=>89);
// $keys=array_keys($students);
// $values=array_values($students);
$sum=0;
$avg=1;
// for ($i = 0; $i < count($values); $i++) {
//       $sum+=$values[$i];
//       $avg=$sum/4;
//   }
//   echo "Average score: ",$avg,"\n";
//   for ($j = 0; $j < count($values); $j++) {
//     if($values[$j]>=$avg){
//       echo $keys[$j], " scored ", $values[$j];
//       echo "\n";
//     }
// }
foreach($students as $keys=>$values){
  $sum+=$values;
  $avg=$sum/4;
}
  echo "Average score: ",$avg,"\n";
  foreach($students as $keys=>$values){
    if($values>=$avg){
            echo $keys, " scored ", $values;
            echo "\n";
          }
  }

?>