<?php

$word = readline("Enter a word to check is a palindome or not:");

if (strrev($word) == $word)
echo "The word is a palindrome";
else 
echo "The word is not a palindrome";

?>