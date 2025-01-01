<?php
$conn = mysqli_connect("localhost", "root", "", "cmdb263");
if (isset($_POST['add_user'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'] ?? null;
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $insertQuery = "INSERT INTO users (`name`, `email`, `gender`, `password`) VALUES ('$name', '$email', '$gender', '$password')";
    $insertQueryResult = mysqli_query($conn, $insertQuery);

    if ($insertQueryResult) {
        echo "User added successfully";
    } else {
        echo "Failed to add user";
    }
}
?>

<h2>Add User</h2>
<form action="" method="post">
    <br>
    <input type="text" placeholder="Your name" name="name" required>
    <br><br>
    <input type="email" placeholder="Your email" name="email" required>
    <br><br>
    <input type="password" placeholder="Your password" name="password" required>
    <br><br>
   <!-- Gender -->
 Gender:
<input type="radio"  name="gender" value="Male" required>Male
<input type="radio"  name="gender" value="Female" required>Female
<br><br>
<input type="submit" name="add_user"  value="Add User"  required>
</form>

