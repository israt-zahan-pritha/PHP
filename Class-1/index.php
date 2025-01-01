<?php
echo "Hello World <br>", "This is Earth <br>" ;
print "This is Pritha <br>";
var_dump("This is PHP Language <br>");

//Variable
$myFullName = "Israt Zahan Pritha";
echo "My full name is: $myFullName<br>";

//=>There are 8 kinds of Data Types:

//String
$myString = "Hello String";
var_dump($myString);
echo"<br>";

//Integer
$myInteger = "Hello Integer";
var_dump($myInteger);
echo"<br>";

//Float
$myFloat = 12.34;
var_dump($myFloat);
echo"<br>";

//Boolean
$myBoolean = true;
var_dump($myBoolean);
echo"<br>";

//Array
$myArray = array("Israt", "Zahan", "Pritha");
var_dump($myArray);
echo "<br>";

//Object
class MyClass
{
    public $name = "Israt<br>";
    public $city = "Dhaka<br>";
    public $district = "Narsingdi<br>";
}
$myObject = new MyClass;
var_dump($myObject);
echo "<br>";

//NULL => 0 is not Null
$myNull = NULL;
var_dump($myNull);
echo "<br>";

//Resource
/*
$myResource = fopen("12-variable-dataTypes.php", "r");
var_dump($myResource);
echo "<br>";
fclose($myResource); 
*/

// --------End Data Types---------

//Constants
define ("DOB", "17-April-1999");
echo DOB;
echo "<br>";
?>
<?php 
$myBoolean = false;
var_dump($myBoolean);
echo "<br>";
 ?>


