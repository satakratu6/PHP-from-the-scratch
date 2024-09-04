<?php
$a = readline("Enter day: ");
$b = readline("Enter month: ");
$c = readline("Enter year: ");



switch($b) {
    case 1: case 3: case 5: case 7: case 8: case 10: case 12:
        if($a >= 1 && $a <= 31) {
            echo "valid";
        } else {
            echo "not valid";
        }
        break;

    case 4: case 6: case 9: case 11:
        if($a >= 1 && $a <= 30) {
            echo "valid";
        } else {
            echo "not valid";
        }
        break;

    case 2:
        if (($c % 4 == 0 && $c % 100 != 0) || ($c % 400 == 0)) {
            if($a >= 1 && $a <= 29) {
                echo "valid";
            } else {
                echo "not valid";
            }
        } else {
            if($a >= 1 && $a <= 28) {
                echo "valid";
            } else {
                echo "not valid";
            }
        }
        break;

    default:
        echo "Not valid";
}
?>
