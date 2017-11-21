<?php
if (isset($_POST['send'])) {
    $toEmail = 'dipladroid@gmail.com';
    $subject = 'Feedback for the website';
    $message = 'Email: ' . $_POST['email'] . "/r/n/n/r";
    $message .- 'Comments: ' . $_POST['comments'];
    
    echo $message;
}

?>

<!DOCTYPE html>
<html>
<body>
    <h1>Thank you!</h1>
    <p>Your message has been sent.</p>
</body>
</html>