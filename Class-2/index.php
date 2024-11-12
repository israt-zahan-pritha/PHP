<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is my First Project</h1>
     <?php 
     echo "Hello echo <br>", "How are you <br>";
     print "Hello print <br>";
     var_dump("Hello var dump <br>");
    //  Variable
     $myFullName = "Israt Zahan <br>";
     echo "My Full Name Is: $myFullName";
     $myFullName = "Pritha Islam  <br>";
     echo "My Full Name Is: $myFullName";

    //Data types

     //String
     $myString = "Hello String";
     var_dump($myString);
     echo "<br>";
     //Integer
     $myInteger = 123;
     var_dump ($myInteger);
     echo "<br>";
     //Float
     $myFloat = 12.34;
     var_dump($myFloat);
     echo "<br>";
     //Boolean
     $myBoolean = true; //true inverted Comma'r vitore rakle String hoye jabe 
     var_dump($myBoolean);
     echo "<br>";
     //Array
     $myArray = array("Pritha" , "Dhaka" , "CMBD");
     var_dump($myArray);
     echo "<br>";
     //Object
     class MyClass
     {
        Public $name = "Pritha";
     }
    $myObject = new MyClass  ;
    var_dump($myObject);
    echo "<br>";
    //Null
    $myNull = NULL;
    var_dump($myNull);
    echo "<br>";
    //Resource
    $myResource = @fopen("12-variable-dataTypes.php" , "r");
    var_dump($myResource);
    echo "<br>";
    fclose($myResource);

    //Constants
    define ("birthPlace" , "Dhaka");
    echo birthPlace;
    echo "<br>";
 ?>

</body>
</html>