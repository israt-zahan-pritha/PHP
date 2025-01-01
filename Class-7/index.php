<?php 
//Regular Expression;
//preg_match(), Preg_match_all(), preg_replace(), preg_split();
 
//preg_match()
// $pattern = "/world/";
// $subject = "Hello, World!";
// var_dump(preg_match($pattern, $subject));
// echo "<br>";

// $pattern = "/^world/";
// $subject = "Hello, World!";
// var_dump(preg_match($pattern, $subject));
// echo "<br>";

// /*Case Sensative*/
// $pattern = "/^hello/i";
// $subject = "Hello, World!";
// var_dump(preg_match($pattern, $subject));
// echo "<br>";

// $pattern = "/^hello, world!*$/i";
// $subject = "Hello, World!";
// var_dump(preg_match($pattern, $subject));
// echo "<br>";

// $pattern = "/^[A-Z]*$/i";
// $subject = "Hello, World!";
// var_dump(preg_match($pattern, $subject));
// echo "<br>";

// $pattern = "/^[A-Z]*/";
// $subject = "Hello, World!";
// var_dump(preg_match($pattern, $subject));
// echo "<br>";

// $pattern = "/^[A-Za-z,! ]*$/i ";
// $subject = "Hello, World!";
// var_dump(preg_match($pattern, $subject));
// echo "<br>";

// $pattern = "/^[A-Za-z,!0-9 ]*$/i ";
// $subject = "Hello, World! 123";
// var_dump(preg_match($pattern, $subject));
// echo "<br>";

/**
 * //means start of the string
 * ^ means start ot the string
 * i means case-insensitive
 * * means zero or more times
 */

 //Email validation with preg_match()
 $email = "pritha@gmail.com";  
 $pattern = "/[A-Za-z0-9._-]+@[A-Za-z0-9]+\.[A-Za-z]*$/";
 var_dump(preg_match($pattern, $email));
echo "<br>";

 $email = "pritha@gmail.com.bd";  
 $pattern = "/^[A-Za-z0-9._-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,6}$/";
 var_dump(preg_match($pattern, $email));
echo "<br>";

//Hard Password validation with preg_match()
$password = "Pritha@123"; //regular expression for strong password
$pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[@#$%^&+=]).{8,20}$/";
var_dump(preg_match($pattern, $password));

?>