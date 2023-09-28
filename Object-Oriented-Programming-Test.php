<?php

class Person {

  // property declaration
  // firstName string for storing the person's first name);
  public $firstName;
  // lastName (for storing the person's last name);
  public $lastName;
  // Date Of Birth (storing the person's date of birth in the format "YYYY-MM-DD");
  public $dob;
  
  function __construct($firstName, $lastName, $dob) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->dob = $dob;
  }

  function getAge($dob){
    $dobDate = new DateTime($dob);
    $currentDate = new DateTime();
    
    $age = $dobDate->diff($currentDate);

    return $age->y;
  }
}

$person = new Person("Alice", "Johnson", "1995/08/21");

$age = $person->getAge($person->dob);
echo "Age: $age years";

?>