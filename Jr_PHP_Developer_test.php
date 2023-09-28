<?php
// Prime number challenge
echo "Prime number challenge: \n";
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

////////////////////////////////////////////////////////////////////////////////

// Palindrome word challenge
echo "\nPalindrome word challenge: \n";

$word = readline("Enter a word to check is a palindome or not:");

if (strrev($word) == $word)
echo "The word is a palindrome";
else 
echo "The word is not a palindrome";

////////////////////////////////////////////////////////////////////////////////

// Leap year challenge
echo "\nLeap year challenge: \n";

$year = readline("Enter a year: ");

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
  echo "Is a leap year";
} else {
  echo "Is not a leap year";
}

?>