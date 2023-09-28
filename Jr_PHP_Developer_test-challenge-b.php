<?php

//Longest name challenge
echo "\nLongest name challenge: \n";

$names = array("Emily", "Benjamin", "Sophia", "Alexander", "Olivia", "William", "Mia", "Samuel");
$longestName = "";

foreach($names as  &$name)
  if (strlen($name) > strlen($longestName)){
    $longestName = $name;
  }

echo $longestName;

?>