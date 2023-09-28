<?php

$year = readline("Enter a year: ");

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
  echo "Is a leap year";
} else {
  echo "Is not a leap year";
}

?>