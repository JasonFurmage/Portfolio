<?php

// Loop through error messages array and insert HTML.
function insertFormMessages($errors) {

    // Choose class based on whether there are any errors.
    $className = count($errors) == 0 ? "success" : "error";

    // Add success message to array if there are no errors.
    if (count($errors) == 0) $errors[] = "Your message has been sent!";

    // Insert HTML.
    foreach ($errors as $message) {
        echo 
        '<div class="form_message ' . $className . '" id="php-message">' . $message . '</div>';
    }
}

// Check if email is valid using regex.
function isValidEmail($string) {
    $regex = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
    return preg_match($regex, $string);
}

function sendEmail($first_name, $last_name, $email, $subject, $message) {

    // Set up PHPMailer with Google SMTP server.
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->Username = $_ENV['GMAIL_USER_NAME'];
    $mail->Password = $_ENV['GMAIL_PASSWORD'];

    // Add form data to email.
    $mail->setFrom('jfurmageweb@gmail.com', 'Portfolio Enquiries');
    $mail->addAddress('jfurmage@me.com', 'Jason Furmage');
    $mail->Subject = $subject;
    $mail->Body = "Name: $first_name $last_name\nEmail: $email\n\nMessage:\n\n$message";

    // Send email.
    if(!$mail->send()) {
        echo 'Email could not be sent.';
        //$mail->SMTPDebug = \PHPMailer\PHPMailer\SMTP::DEBUG_SERVER;
    }
}

?>
