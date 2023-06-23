<?php
error_reporting(E_ALL & ~E_NOTICE);
//var_dump($_POST["complexity"]);
$result = $_POST["complexity"];           //complexity
//$symbol = $_POST['math_symbol'];

if($result === "true"){
$rand_1 = rand(1, 200);
$rand_2 = rand(1, 200);
} elseif($result === "false") {
  $rand_1 =  rand(1, 100);
$rand_2 = rand(1, 100);
}



$sign = mt_rand(0, 1);
if ($sign== 0) {
  $random_sign = '-';
} elseif ($sign == 1) {
  $random_sign = '+';
} 



function calculate($operator, $num1, $num2) {
  switch ($operator) {
      case '+':
          return $num1 + $num2;
          break;
      case '-':
          return $num1 - $num2;
          break;
      case '*':
          return $num1 * $num2;
          break;
      case '/':
          return $num1 / $num2;
          break;
      default:
          echo "Неизвестный оператор!";
          break;
  }
}
echo calculate($random_sign, $rand_1, $rand_2);
echo ',';
echo $rand_1 . "$random_sign" . $rand_2 . ' = ...' ;
?>