<?php

function Is_Prime($number) {
  if ($number < 1)
    return "Your number is not prime";
  else
    for ($i = 2; $i <= $number/2; $i++) {
      if ($number%$i == 0){
        return "Your number is not prime";
      }
    }
  return "Your number is prime";
}

$number = readline("Insert a positive number: ");
  
echo Is_Prime($number);

?>