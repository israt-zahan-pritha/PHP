<?php 
class studentInfoClass{

    //Static propertie
    public static $batchName = "cmbd263";

    //Static method
    public static function batchCode (){
        return "263";
    }
}

//instantiate the class
// $stObj = new studentInfoClass();

// //Accessing static properties
echo studentInfoClass::$batchName;
echo "<br>";

// //Accessing static method
echo studentInfoClass::batchCode();

//Inheritance
class studentInfoClass2 extends studentInfoClass{
    public static $batchName = "cmbd263";
}
echo "<br>";
echo studentInfoClass2::batchCode();
?>