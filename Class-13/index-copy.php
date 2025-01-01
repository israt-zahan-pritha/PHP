<?php 
//BaseName
echo basename($_SERVER['PHP_SELF']) . "<br>";

//Dirname
echo Dirname($_SERVER['PHP_SELF']) . "<br>";

//Copy
copy("index.php", "index-copy.php") . "<br>";

//File
$file = file("index.php");
echo "<pre>";
print_r($file);
echo "<pre>";

//File_exists
echo file_exists("index.php")? "File found" : "File not found";
echo "<br>";

//File_Get_Contents
echo file_get_contents("index.php") . "<br>";

//File_Put_Contents
/*file_put_contents("index.php", "Hello Pritha") . "<br>";*/

//File Size
echo  filesize("index.php") ."<br>";

//File Type
echo filetype("index.php") . "<br>";
echo filetype("Class-13/") . "<br>";

//Is Dir
echo is_dir("index.php")? "Yes, it's a directory" : " Not directory" ."<br>";
echo is_dir("Class-13/ ")? "Yes, it's a directory" : " Not directory" ."<br>";

//Is File
echo is_file("index.php")? "Yes, it's a file" : " Not file" ."<br>";

//Link
link("index.php", "index-link.php") . "<br>";

//Unlink
unlink("index-link.php"). "<br>";

//mkdir
mkdir("Class-13");

//rmdir
rmdir("Class-13");
echo "<br>";

//move uploaded file
move_uploaded_file($_FILES['file']['tmp_name'], "uploads/" . $_FILES['file']['name']); 

//pathinfo
$path_parts = pathinfo ("index.php");
echo "<pre>";
print_r($path_parts);
echo "<pre>";

?>