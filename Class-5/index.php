<?php
/*
There are three kind of array.
1) Index Array
2) Assosiative Array
3) Multidimantional Array
*/
//Index of Array
$studentInfo = ["Pritha", "Female", "Dhaka", 25];
echo "<pre>";
var_dump($studentInfo);
echo "</pre>";
echo "<br/>";
 
echo "<pre>";
print_r($studentInfo);
echo "</pre>";
echo "<br/>";

//One by One Loop
echo $studentInfo[0] . "<br/>" ;
echo $studentInfo[1] . "<br/>" ;
echo $studentInfo[2] . "<br/>" ;
echo $studentInfo[3] . "<br/>" ;

//count() function
echo count($studentInfo)  . "<br/>";


//For Loop
for ($i=0; $i<count($studentInfo); $i++) { 
    echo $studentInfo[$i] . "<br/>";
}

//For Each Loop
foreach ($studentInfo as $info) {
    echo $info . "<br/>" ;
}

//While Loop
$i = 0;
$totalElements = count($studentInfo);
while ($i < $totalElements) {
    echo $studentInfo[$i] . "<br/>";
    $i++;
}

//Assosiative Array
$prithaInfo = [
    "name" => "Pritha",
    "gender" => "Female",
    "address" => "Dhaka",
    "age" => 25,
];
echo "<pre>"; 
print_r($prithaInfo);
echo "</pre>";
echo "<br/>";

//Using For Each {Dont use For becuse there is no index number}
foreach ($prithaInfo as $info) {
    echo $info . "<br/>" ;
}
//Another System
foreach ($prithaInfo as $key => $info) {
echo $key . " : " . $info . "<br/>" ;
}
//Use Capital letter of fro
foreach ($prithaInfo as $key => $info) {
echo $key . " : " . $info . "<br/>" ;
}
foreach ($prithaInfo as $key => $info) {
echo ucfirst($key) . " : " . $info . "<br/>" ;
}

//Multidimantional Array
$studentInfo = [
    [
        "name" => "Pritha",
        "gender" => "Female",
        "address" => "Dhaka",
        "isMarried" => false,
    ],
    [
        "name" => "Israt",
        "gender" => "Female",
        "address" => "Dhaka",
        "isMarried" => true,
    ],
    [
        "name" => "Zahan",
        "gender" => "Female",
        "address" => "Dhaka",
        "isMarried" => false,
    ],
    [
        "name" => "Shimu",
        "gender" => "Female",
        "address" => "Dhaka",
        "isMarried" => true,
    ],
];
echo "<pre>"; 
print_r($studentInfo);
echo "</pre>";
echo "<br/>";

echo $studentInfo[0]["name"] . "<br/>";

foreach ($studentInfo as $student) {
    foreach ($student as $key => $value) {
        echo ucfirst ($key) . " : " . $value . "<br>";
    }
}
?>
