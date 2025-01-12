<?php 
class studentClass {
    public $batchName = "CMBD 263";
    public const batchCode = "263 <br>";

    //Magic Function
    public function __construct(){
        echo "Object created successfully<br>";
    }
    public function __destruct(){
        echo "Object destruct successfully<br>";
    }
    public function student1 ($Man){
      return "Student 1 is a $Man";
  }
}
$stdObj = new studentClass();
echo $stdObj->batchName;
echo "<br>";
echo $stdObj->student1("Human");
echo "<br>";
echo studentClass::batchCode; //Or
echo "<br>";
echo $stdObj::batchCode; 
?>