<?php
 
 function registerUser($email) {
    echo $email . ' User registered';
 }

 //registerUser('Bima');

 function sum($n1 = 4, $n2 = 5) {
   return $n1 + $n2;
 }

 $number = sum();
 //echo $number;

$subtract = function($n1, $n2) {
   return $n1 - $n2;
};

//cho $subtract(10, 5);

// simple ways of doing it
$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(7,10);
