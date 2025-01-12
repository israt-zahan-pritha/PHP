<?php 
//Interfaces
interface studentInfo{
    public function student1();
    public function student2();
}

class studentsClass implements studentInfo{

    //Property
    public $batchName = "cmbd263";
    public $setProperties = [];
    private $batchCode = "263";
    public function student1(){
        return "Student 1 is Kamal";
    }
    public function student2(){
        return "Student 2 is Jamal";
    }
    public function __construct(){
        echo "Object created successfully <br>";
    }
    public function __destruct(){
        echo "<br> Object destroyed successfully";
    }

    // Magic method __get
/*
    public function __get($name) {
        echo "You are trying to access a non-existing or private property ($name)";
    }
*/
    // Magic method to get a property
    public function __get($name) {
        if (array_key_exists($name, $this->setProperties)) {
            return $this->setProperties[$name];
        }
        echo "You are trying to access a non-existing or private property ($name)";
    }

    // Magic method to set a property
    public function __set($name, $value) {
        $this->setProperties[$name] = $value;
    }

}
// Instantiate the class
$stdObj = new studentsClass();
//Overrides
$stdObj->batchName = "CMBD263";

// Call the methods
echo $stdObj->student1();
echo "<br>";
echo $stdObj->student2();
echo "<br>";
echo $stdObj->batchName;
echo "<br>";
echo $stdObj->batchCode;
echo "<br>";
$stdObj->commonCity = "Dhaka";
echo $stdObj->commonCity;
?>
