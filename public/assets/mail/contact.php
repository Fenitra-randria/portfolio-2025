<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('Invalid Request');
}

// Validation de l'adresse e-mail
function isEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// Récupération des données POST avec nettoyage
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$comments = trim($_POST['comments'] ?? '');

// Validation des champs
if ($name === '') {
    echo '<div class="alert alert-error">You must enter your name.</div>';
    exit();
}

if ($email === '') {
    echo '<div class="alert alert-error">You must enter an email address.</div>';
    exit();
}

if (!isEmail($email)) {
    echo '<div class="alert alert-error">You must enter a valid email address.</div>';
    exit();
}

if ($phone === '') {
    echo '<div class="alert alert-error">Please fill all fields!</div>';
    exit();
}

if ($comments === '') {
    echo '<div class="alert alert-error">You must enter your comments.</div>';
    exit();
}

// Configuration de l'adresse e-mail de réception
$address = "fenitramidev7@gmail.com";

// Sujet et contenu de l'e-mail
$e_subject = "Contact Form Submission";
$e_body = "You have been contacted by $name. Their additional message is as follows:" . PHP_EOL . PHP_EOL;
$e_content = "\"$comments\"" . PHP_EOL . PHP_EOL;
$e_reply = "You can contact $name via email: $email or phone: $phone";

$msg = wordwrap($e_body . $e_content . $e_reply, 70);

// En-têtes sécurisés pour éviter les injections
$headers = "From: noreply@yourdomain.com" . PHP_EOL;
$headers .= "Reply-To: $email" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;

// Envoi de l'e-mail
if (mail($address, $e_subject, $msg, $headers)) {
    echo "<div class='alert alert-success'>";
    echo "<h3>Email Sent Successfully.</h3>";
    echo "<p>Thank you <strong>$name</strong>, your message has been submitted to us.</p>";
    echo "</div>";
} else {
    echo '<div class="alert alert-error">ERROR: Unable to send email. Please try again later.</div>';
}
