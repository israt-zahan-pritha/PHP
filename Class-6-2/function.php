<?php 
//Function
// Function with default parameters
function myInfo($name = "Kuddus", $age = 65, $job = "Boyati")
 {
    echo "My name is $name <br>";
    echo "I am $age years old <br>";
    echo "He is a $job<br>";
}

// Calling the function with different arguments
myInfo("Kamal", 25, "Web Developer");
echo "<br>";
myInfo("Jamal", 30, "Designer");
echo "<br>";
myInfo(); // Uses default values
echo "<br>";

// Function returning a value
function myAddress() {
    return "Dhaka, Bangladesh";
}

// Displaying the returned value
echo myAddress();

?>