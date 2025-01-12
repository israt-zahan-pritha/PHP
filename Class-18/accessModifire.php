<?php 
class studentClass {
    public $student1 = "Kamal";
    protected $student2 = "Jamal";
    private $student3 = "Rahim";

    public function allStudent (){
        return $this->student1 . " ". $this->student2 . " " . $this->student3;    }
}

$stdObj = new studentClass();
echo $stdObj->allStudent(); 
echo "<br>";
echo $stdObj->student1;
echo "<br>";

//inheritance
class studentClass2 extends studentClass{
    public function allStudent2(){
        return $this->student1 . " " .$this->student2;
    }
}
$stdObj2 = new studentClass2();
echo $stdObj2->allStudent2() ;
echo "<br>";
echo $stdObj2->student1;
echo "<br>";
// echo $stdObj2->student2;
?>