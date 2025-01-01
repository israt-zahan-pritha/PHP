<?php 
$msg = "Hello World";
echo "$msg<br>";
echo '$msg<br>';

//Comparison Operators
/*
== Equal
=== Identical
!= Not Equal
<> Not Equal
!== Not Identical
> Grater than
< Less than
>= Grater than or Equal to
<= Less than or Equal to  
*/
$num1 = 5;
$num2 ="5";
if ($num1 === $num2) {
echo "Equal<br>";
}else {
    echo "Not Equal<br>";
}

//Increment/Decrement Operators
/*
++$ Pre-increment => 1 + x
$x++ Post-increment => x + 1
--$x Pre-decrement
$x-- Post-decrement
*/
$x = 5;
$x = $x + 1;
$x += 1;
$x ++; // 1+x 

//Conditional (Ternary) Operator
// $a ? $b : $c 

//Null Coalescing Operator
// $a ?? $b

$file = @file('non_existent_file.text');
if ($file === false) {
    echo "File not Found<br>";
}

if (print @'nai') {
    echo "Printed<br>";
} else {
    echo "Not Printed<br>";
}

 ?>