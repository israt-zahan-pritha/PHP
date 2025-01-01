<?php 
//Mathmatical Function
echo abs(-5.5) ."<br>";

echo ceil(5.2) . "<br>";

echo floor(5.9) . "<br>";

echo  round(5.4) . "<br>";//the mixed of abs & ceil
echo  round(5.5) . "<br>";

echo rand(1000, 9999) . "<br>";
echo rand() . "<br>"; // Desired number will Come

echo max(0, 150, 20, 49, 700, 500) . "<br>";
echo min(0, 150, -20, 49, -700, 500) . "<br>";

echo sqrt(64) . "<br>";
echo  pi() . "<br>";
echo pow(2,3) . "<br>";
echo uniqid() . "<br>";

// If...Else
$age = 20;

if ($age >= 18) {
   echo "You are Adult<br>";
}else {
    echo "You are Child<br>";
}
$age = 65;

if ($age >= 18) {
   echo "You are Senior Citizen<br>";
}elseif ($age >= 18) {
    echo "You are Adult<br>";
}else {
    echo "You are Child<br>";
}

//Switch Case
$age = "Monday";

switch ($age) {
    case 'Saturday':
       echo "Saturday<br>";
        break;
    case 'Sunday':
       echo "Sunday<br>";
        break;
    case 'Monday':
       echo "Monday<br>";
        break;
    default:
      echo "Invalid Day<br>";
}

//Ternary
$age = 20;
echo $age >= 18? "You are adult <br>" : "You are Child<br>";

// Null Coalescing Operator
$studentName;
echo $studentName ?? "No name found<br>";
$studentName = "Pritha";
echo $studentName ?? "No name found<br>";
?>