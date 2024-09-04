<?php
$marks = readline("Enter your marks: ");
echo ($marks >= 90) ? "A" : (($marks >= 80) ? "B" : (($marks>=70)?"C":(($marks>=60)?
"D":(($marks>=50)?"D":"Fail"))));
?>
