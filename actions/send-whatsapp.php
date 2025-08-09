<?php
// send-whatsapp.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = urlencode($_POST['name']);
    $message = urlencode($_POST['message']);

    // Change this to your WhatsApp number with country code (no + or spaces)
    $phone = "7373557074";

    // Message to send
    $text = "Name: $name%0AMessage: $message";

    // Redirect to WhatsApp
    header("Location: https://wa.me/$phone?text=$text");
    exit;
}
?>
