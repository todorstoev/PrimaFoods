<?php 

error_reporting(0);

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = strip_tags($data);

    return $data;
}

$name = $email = $subject_mail = $text = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $subject = test_input($_POST['subject']);
    $text = test_input($_POST['yourtext']);

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    if (empty($name) || empty($subject) || empty($text) || empty($email)) {
        http_response_code(400);
        echo "There was a problem with your submission. Please complete the form and try again.";
    } else {
        $recipient = "info@primafoods.bg";

        $subject_mail = "New contact from $name";

        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Subject:$subject\n";
        $email_content .= "Message:\n$text\n";

        $email_headers = "From: $name <$email>";

        if (mail($recipient,$subject_mail ,$email_content)) {
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }
    }
} else {
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}