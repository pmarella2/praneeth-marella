<?php

if ($_POST) {
    $cf_name    = "";
    $cf_email   = "";
    $cf_message = "";

    if (isset($_POST['cf_name'])) {
        $cf_name = filter_var($_POST['cf_name'], FILTER_SANITIZE_STRING);
    }

    if (isset($_POST['cf_email'])) {
        $cf_email = str_replace(array(
            "\r",
            "\n",
            "%0a",
            "%0d"
        ), '', $_POST['cf_email']);
        $cf_email = filter_var($cf_email, FILTER_VALIDATE_EMAIL);
    }

    if (isset($_POST['cf_message'])) {
        $cf_message = htmlspecialchars($_POST['cf_message']);
    }

    $recipient = "praneethmarella@icloud.com";

    $headers = 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/html; charset=utf-8' . "\r\n" . 'From: ' . $cf_email . "\r\n" . 'Reply-To: ' . $field_email . "\r\n";

    if (mail($recipient, $cf_name, $cf_message, $headers)) {
        echo "<p>Thank you for dropping a message, $cf_name. I look forward to reading it!</p>";
    } else {
        echo '<p>Message failed to send. Please use "link up" link below..</p>';
    }

} else {
    echo '<p>Something went wrong in the contact form.</p>';
}

?>