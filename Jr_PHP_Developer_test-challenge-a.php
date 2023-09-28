<?php

// Largest number challenge
echo "Largest number challenge: \n";

$numbers = array(29, 57, 12, 83, 41, 68, 5, 74);
$largestNumber = 0;

foreach($numbers as  &$number)
  if ($number > $largestNumber){
    $largestNumber = $number;
  }
  
echo $largestNumber;

?>