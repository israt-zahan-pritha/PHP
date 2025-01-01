<?php 
echo date("d/m/y") ."<br>";
echo date("d/M/Y") ."<br>";
echo date("d/F/Y") ."<br>";
echo date("d-F-Y") ."<br>";
echo date("d F Y") ."<br>";
echo date("d F Y h:i:s a") ."<br>";
echo date("d F Y h:i:s A") ."<br>";
echo "<br>";


date_default_timezone_set("Asia/Dhaka");
echo date("d-F-Y H:i:s") ."<br>";
echo "<br>";
echo date("d F Y h:i:s A e") ."<br>";
echo date("d F Y h:i:s A l e") ."<br>";
echo date("d F Y h:i:s A D e") ."<br>";

//mktime (hour, minute, second, month, day, year) =>Make TIme
$myTime = mktime(12, 0, 0, 4, 17, 1998);
echo date("d-F-Y h:i:s A l" , $myTime) ."<br>";

//str to time
$myTime = strtotime("next sunday");
echo date("d-F-Y h:i:s A l" , $myTime) ."<br>";
echo "<br>";

$myTime = strtotime("+3 years +2 months +1 day +4 hour +5 minute +6 second");
echo date("d-F-Y h:i:s A l" , $myTime) ."<br>";

//next 7 bfridays
$startDate = strtotime ("next Friday");
$endDate = strtotime ("+6 weeks", $startDate );
while ($startDate <= $endDate) {
    echo date("d-F-Y l", $startDate) ."<br>";
    $startDate = strtotime ("+1 week", $startDate);
}

//difference between two dates by date_diff
$startDate = date_create ("2020-01-01");
$endDate = date_create ("2021-12-31");
$diff = date_diff($startDate, $endDate);
echo $diff->format("%a days, %m months, %y years") ."<br>";
echo "<br>";


$startDate = date_create (date("y-m-d"));
$endDate = date_create ("2025-02-21");
$diff = date_diff($startDate, $endDate);
echo $diff->format("%a days, %m months, %y years") ."<br>";
echo "<br>";

//Filter
echo filter_var("contact@isratzahan.com", FILTER_VALIDATE_EMAIL)? "Valid" : "Invalid" ."<br>";

//Json_decode / Json to assosiative array
$studentInfoJson = '{"name": "Pritha", "age": "25", "City": "Dhaka"}';
$studentInfo = Json_decode($studentInfoJson);
echo "<pre>";
print_r($studentInfo);
echo "<pre>";

//Json_encode
$studentInfo = [
    "name" => "Pritha",
    "age" => "25",
    "city" => "Dhaka",
];
$studentInfoJson = json_encode($studentInfo);
echo $studentInfoJson . "<br>";
?>