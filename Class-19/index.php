<?php 
//Object Serialization
class studentClass{
    public $batchName = "cmbd263";
    public $batchDuration = "6 months";
    public const batchCode = "263";
    public function __construct(){
        echo "Object created successfully<br>";
    }

    public function __destruct(){
        echo "<br>Object destroyed successfully";
    }

    public function student1 ($animal){
        return "Student 1 is a $animal";
    }
}

$stdObj = new studentClass();
echo $stdObj->batchName;
echo "<br>";
echo $stdObj->student1("moncky");
 echo "<br>";
 echo $stdObj::batchCode;

 //Object Serialization
 $serializedObj = serialize($stdObj);
 echo "<br>";
 echo "<pre>";
 echo $serializedObj;

 $unserializedObj = unserialize($serializedObj);
 echo "<br>";
 echo "<pre>";
 print_r($unserializedObj);
 echo "<br>";
?>