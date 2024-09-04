<?php
echo "Choose the meal: \n1: Breakfast\n2: Lunch\n3: Dinner\n4: Snack\n";
$a=readline("Enter choice: ");
switch($a){
  case 1:
    echo "Choose the item: \n";
    echo "Choose the meal: \n1: Paratha\n2: Poha\n3: Maggi\n4: Bonda\n";

    $b=readline("Enter item no: ");
    switch($b){
      case 1:
        echo "Paratha";
        break;
      case 2:
        echo "Poha";
        break;
      
      case 3:
        echo "Maggi";
        break;
      case 4:
        echo "Bonda";
        break;
      default:
      echo "Wrong choice";
      
    } break;
    case 2:
      echo "Choose the item: \n";
      $b=readline("Enter item no: ");
      switch($b){
        case 1:
          echo "Rajma";
          break;
        case 2:
          echo "Soyabean";
          break;
        
        case 3:
          echo "Bhindi";
          break;
        case 4:
          echo "Aloo gobi";
          break;
        default:
        echo "Wrong choice";
      } break;case 3:
        echo "Choose the item: \n";
        $b=readline("Enter item no: ");
        switch($b){
          case 1:
            echo "Dal";
            break;
          case 2:
            echo "Aloo motor";
            break;
          
          case 3:
            echo "Rajma";
            break;
          case 4:
            echo "Dosa";
            break;
          default:
          echo "Wrong choice";
        } break;case 4:
          echo "Choose the item: \n";
          $b=readline("Enter item no: ");
          switch($b){
            case 1:
              echo "Idly";
              break;
            case 2:
              echo "sambar";
              break;
            
            case 3:
              echo "Maggi";
              break;
            case 4:
              echo "Bonda";
              break;
            default:
            echo "Wrong choice";
          }
          default:
          echo "Wrong choice";
}
?>