<?php
$acceptedFiles = ["jpg", "jpeg", "png", "gif"];

if (isset($_POST['upload'])) {
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
    $letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $randomString = substr(str_shuffle($letters), 0, 6);
    $newFileName = $randomString . "_" . uniqid() . "." . $fileExtension;
    //getImageSize($fileTampName);
    if (!in_array($fileExtension, $acceptedFiles)) {
      echo "Please upload an image file";
    }elseif ($fileSize> 500000) {
    echo "Please upload an image file less then 500kb";
    }else {
       move_uploaded_file($fileTmpName, "Class-10");
    }
}
?>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="file" id="">
<input type="submit" value="Upload File" name="upload">
</form>
<!-- <? 
$acceptedFiles = ["jpg", "jpeg", "png", "gif"];

if (isset($_POST['upload'])) {
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
    $letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $randomString = substr(str_shuffle($letters), 0, 6);
    $newFileName = $randomString . "_" . uniqid() . "." . $fileExtension;

    // Create the 'Class-10' folder if it doesn't exist
    $uploadDir = "Class-10";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    if (!in_array($fileExtension, $acceptedFiles)) {
        echo "Please upload an image file.";
    } else {
        move_uploaded_file($fileTmpName, "$uploadDir/$newFileName");
        echo "File uploaded successfully as $newFileName.";
    }
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="">
    <input type="submit" value="Upload" name="upload">
</form> -->
