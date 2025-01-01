<!-- <button id="reloadBtn">Reload</button>
<script>
    const reloadBtn = document.getElementById('reloadBtn'); 
    const reloadFunc = () => {
        location.reload();
    };
    reloadBtn.addEventListener('click', reloadFunc);
</script> -->

<button id="reloadBtn">Reload</button>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const reloadBtn = document.getElementById('reloadBtn');
    const reloadFunc = () => {
      location.reload();
    };
    reloadBtn.addEventListener('click', reloadFunc);
  });

</script>
<?php
echo "<br>";
$uppercase = "ABCDEHDGLJK";
$lowercase = "asdkjlsdhtuilg";
$numbers = "123456789";
$specialChars = "!@#$%^&*";

// Shuffle and get random characters
$shuffleUppercase = str_shuffle($uppercase);
$getFirstThreeUppercase = substr($shuffleUppercase, 0, 3);

$shuffleLowercase = str_shuffle($lowercase);
$getFirstThreeLowercase = substr($shuffleLowercase, 0, 3);

$shuffleNumbers = str_shuffle($numbers);
$getTwoNumbers = substr($shuffleNumbers, 0, 2);

$shuffleSpecialChars = str_shuffle($specialChars);
$getTwoSpecialChars = substr($shuffleSpecialChars, 0, 2);

// Concatenate all parts of the password
$randomPass = $getFirstThreeUppercase . $getFirstThreeLowercase . $getTwoNumbers . $getTwoSpecialChars;

// Shuffle the final password to randomize character order
$randomPass = str_shuffle($randomPass); 

echo "Random password is: $randomPass <br>";


//Unique random password
$uniqueRandomPassword = uniqid ();
echo "Random Pass is: $uniqueRandomPassword<br>";

//Random Number
$randomNumber = rand (1000, 9999);
echo "Random number is:$randomNumber <br>";

/*---------Numbers--------*/
$n1 = 20;
$n2 = 10;

// Addition
$addition = $n1 + $n2;
echo "Addition: $addition <br>";

// Subtraction
$subtraction = $n1 - $n2;
echo "Subtraction: $subtraction <br>";

// Multiplication
$multiplication = $n1 * $n2;
echo "Multiplication: $multiplication <br>";

// Division
$division = $n1 / $n2;
echo "Division: $division <br>";

// Modulus
$modulus = $n1 % $n2;
echo "Modulus: $modulus <br>";

/*--------built-in numeric functions----------*/

// abs() - absolute value
$number = -5;
$absolute = abs($number);
echo "Absolute value: $absolute <br>";

// ceil() - round up
$number = 5.1;
$ceil = ceil($number);
echo "Ceil value: $ceil <br>";

// floor() - round down
$number = 5.9;
$floor = floor($number);
echo "Floor value: $floor <br>";

// round() - round to nearest
$number = 5.4;
$round = round($number);
echo "Round value: $round <br>";

/*---------- Incrementing and decrementing----------*/
$number = 5;
$number++;
echo "Increment: $number <br>";

$number = 5;
$number--;
echo "Decrement: $number <br>";

// Concatenating strings
$firstName = "Md";
$lastName = "Kamal";
$fullName = $firstName . " " . $lastName;
echo "Full name is: $fullName <br>";

// Trimming strings
$trimmedString = "   Hello World!   ";
$trimmedString = trim($trimmedString);
echo "Trimmed string: $trimmedString <br>";

// Removing slashes and other harmful characters
$badString = "Hello \/ World!";
$goodString = stripslashes($badString);
echo "Good string is: $goodString <br>";

// String functions
// strlen() - string length
$string = "Hello World!";
$length = strlen($string);
echo "String length is: $length <br>";

// str_word_count() - word count
$wordCount = str_word_count($string);
echo "Word count is: $wordCount <br>";

// strrev - reverse string
$string = "Hello World!";
$reversedString = strrev($string);
echo "Reversed string is: $reversedString <br>";

// strpos - search for a text within a string
$string = "Hello World!";
$position = strpos($string, "World");
echo "Position of World is: $position <br>";

// str_replace - replace text within a string
$string = "Hello World!";
$replacedString = str_replace("World", "Universe", $string);
echo "Replaced string is: $replacedString <br>";

// strtolower - convert string to lowercase
$string = "Hello World!";
$lowercase = strtolower($string);
echo "Lowercase string is: $lowercase <br>";

// strtoupper - convert string to uppercase
$string = "Hello World!";
$uppercase = strtoupper($string);
echo "Uppercase string is: $uppercase <br>";

// str_split - split a string into an array
$string = "Hello World!";
$splitString = str_split($string);
echo "<pre>";
print_r($splitString);
echo "</pre>";

// str_word_count - count words in a string
$string = "Hello World!";
$wordCount = str_word_count($string);
echo "Word count is: $wordCount <br>";

// substr - return part of a string
$string = "Hello World!";
$substring = substr($string, 6, 5);// str_split - split a string into an array
$string = "Hello World!";
$splitString = str_split($string);
echo "<pre>";
print_r($splitString);
echo "</pre>";

// str_word_count - count words in a string
$string = "Hello World!";
$wordCount = str_word_count($string);
echo "Word count is: $wordCount <br>";

// substr - return part of a string
$string = "Hello World!";
$substring = substr($string, 6, 5);
echo "Substring is: $substring <br>";// str_split - split a string into an array
$string = "Hello World!";
$splitString = str_split($string);
echo "<pre>";
print_r($splitString);
echo "</pre>";

// str_word_count - count words in a string
$string = "Hello World!";
$wordCount = str_word_count($string);
echo "Word count is: $wordCount <br>";

// substr - return part of a string
$string = "Hello World!";
$substring = substr($string, 6, 5);
echo "Substring is: $substring <br>";
echo "Substring is: $substring <br>";

?>



 