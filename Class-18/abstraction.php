<?php 
// abstraction
abstract class studentsClass {
    public $student1 = "Kamal";
    protected $student2 = "Jamal";
    public  $student3 = "Rahim";
    public static int $batchCode = 263;

    abstract public function allStudent();
}
final class studentsClass2 extends studentsClass {
    public function allStudent() : string {
        return $this->student1 . " " . $this->student2 . " " . $this->student3;
    }

}

$stdObj = new studentsClass2();
echo $stdObj->allStudent();

//Object Cloning
$stdObj2  = clone$stdObj;

//Comparing Object
if($stdObj == $stdObj){
    echo "Both object are same";
} else {
    echo "Both object are not same";
}

//Late Static Bindings
class studentClass3{
    public static $batchCode = 263;
    public static function batchCode(){
        return static::$batchCode;
    }
}

class studentClass4 extends studentClass3{
    public static $batchCode = 264;
}

echo "<br>";
echo studentClass4::batchCode();

//Object and reference
$stdObj3 = new studentsClass2();
$stdObj4 = $stdObj3;
$stdObj4->student1 = "Rahim";
echo "<br>";
echo $stdObj3->student1;
?>



