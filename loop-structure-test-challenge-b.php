<?php

//Multiplication table challenge
echo "\nMultiplication table challenge: \n";

$number = readline("Input the number:");

for ($i = 1; $i <= 10; $i++)
  echo $number ." x " . $i . " = " . $number*$i . "\n";

?>