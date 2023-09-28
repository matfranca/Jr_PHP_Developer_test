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

////////////////////////////////////////////////////////////////////////////////

//Longest name challenge
echo "\nLongest name challenge: \n";

$names = array("Emily", "Benjamin", "Sophia", "Alexander", "Olivia", "William", "Mia", "Samuel");
$longestName = "";

foreach($names as  &$name)
  if (strlen($name) > strlen($longestName)){
    $longestName = $name;
  }

echo $longestName;

////////////////////////////////////////////////////////////////////////////////

// Sum of elements challenge
echo "Sum of elements challenge: \n";

$numbers = array(29, 57, 12, 83, 41, 68, 5, 74);
echo array_sum($numbers);

?>