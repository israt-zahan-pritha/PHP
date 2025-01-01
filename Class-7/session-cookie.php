<?php 
session_start();
$_SESSION['name'] = "Shimu";

echo $_SESSION['name'];
session_unset();
echo "<br>";

//Cookie
setcookie("name", "Pritha Islam",time() + 3600, "/");
// setcookie("name", "Pritha Islam",time() + 60);
echo $_COOKIE ['name'];
?>