<?php 
function myTry($x, $y, $z){
  try {
    $a = ($x + 5) / ($y - 5);
    if ($a > $z) {
        throw new Exception ( "Value is grater then z");
    }else {
        echo "value is a $a" ."<br>";
    }
  } catch (Exception $e) {
    echo "Finally block executed" ."<br>";
  }  
}
myTry(10, 10, 2);

//fatal error
myTry(10, 5, 2);
?>