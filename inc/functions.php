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

?>