<?php
//Start Point
//End Point
//increment / decrement

//while Loop
$n = 0;
while ($n < 10){
    echo $n . "<br>";
    $n++;
    //$n = $n + 1;
    //$n += 1;
} 

//Do-while-loop
$o = 15;
do {
    echo $o . "<br>";
    $o++;
} while ($o <= 10); 

//For Loop
for ($i=0; $i <10 ; $i++) { 
    echo $i . "<br>";
}

//ForEach
$colors = ["Red", "Green", "Blue", "Yellow"];
// echo $colors[0] . "<br>";
foreach ($colors as $color) {
   echo $color . "<br>";
}
//Another Method
for ($i=0; $i < count($colors); $i++) { 
    echo "Color name: " . $colors[$i] . "<br>";
}
?>


