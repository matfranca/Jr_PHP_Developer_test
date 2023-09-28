<?php

// Countdown challenge
echo "Countdown challenge: \n";

for ($i = 10; $i > 0; $i--)
  echo $i ."\n";

////////////////////////////////////////////////////////////////////////////////

//Multiplication table challenge
echo "\nMultiplication table challenge: \n";

$number = readline("Input the number:");

for ($i = 1; $i <= 10; $i++)
  echo $number ." x " . $i . " = " . $number*$i . "\n";

////////////////////////////////////////////////////////////////////////////////

// Even numbers challenge
echo "\nEven numbers challenge: \n";
echo "The even numbers between 1 and 20\n";

for ($i = 1; $i <= 20; $i++)
  if ($i % 2 == 0)
    echo $i ."\n";

?>