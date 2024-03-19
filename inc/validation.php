<?php

include("inc/connection.php");
include("inc/functions.php");

$errors = [];

// Check if form has been submitted.
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $noErrors = true;

    // Get and filter form data.
    $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
    $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // Add error messages to array if errors are found.
    if (empty($first_name) || empty($last_name) || empty($email) || empty($subject) || empty($message) ) {
        $errors[] = "Please fill in all required fields.";
    } else if (!isValidEmail($email)) {
        $errors[] = "Please enter a valid email address.";
    }

    // Check if there were any errors.
    $noErrors = count($errors) === 0;

    // Add form data to database if there were no errors.
    if ($noErrors) {

        $sql = 'INSERT INTO enquiries (first_name, last_name, email, subject, message) VALUES (?, ?, ?, ?, ?)';

        try {
            $results = $db->prepare($sql);
            $results->bindValue(1, $first_name, PDO::PARAM_STR);
            $results->bindValue(2, $last_name, PDO::PARAM_STR);
            $results->bindValue(3, $email, PDO::PARAM_STR);
            $results->bindValue(4, $subject, PDO::PARAM_STR);
            $results->bindValue(5, $message, PDO::PARAM_STR);
            $results->execute();
            
        } catch (Exception $e) {
            $errors[] = "There was an error submitting your enquiry.";
            //echo $e->getMessage();
        }
    }

    // If submission was successful, send email notification and clear text field variables.
    if ($noErrors) {
        sendEmail($first_name, $last_name, $email, $subject, $message);
        $first_name = $last_name = $email = $email = $subject = $message = null;
    }
}

?>
