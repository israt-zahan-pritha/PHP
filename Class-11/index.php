<?php
// Sending mail
if (isset($_POST['sendMail'])) {
    $to = "isratzahanpritha@gmail.com ";
    $subject = "Test mail";
    $message = "Hello! This is a simple email message.";
    $headers = "From: contact@isratzahan.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Mail sent successfully";
    } else {
        echo "Mail not sent";
    }
}
?>

<form action="" method="post">
    <input type="submit" value="Send Mail" name="sendMail">
</form>
