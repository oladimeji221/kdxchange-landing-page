<?php
session_start();

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $whatsapp = $_POST['whatsapp'];
    $message = $_POST['message'];

    $mailTo = "kolade@kdxchange.com.ng, koladeo49@gmail.com";
    $headers = "From: " . $mailFrom;
    $txt = "You have a message from " . $firstname . " " . $lastname . " with WhatsApp: " . $whatsapp . ".\n\n" . $message;

    if (mail($mailTo, 'Message from ' . $firstname . ' ' . $lastname, $txt, $headers)) {
        $_SESSION['message'] = "Message sent successfully!";
    } else {
        $_SESSION['message'] = "Message sending failed. Please try again.";
    }
    
   // if (isset($_SESSION['message'])) {
   //      echo '<script>alert("' . $_SESSION['message'] . '");</script>';
   //      unset($_SESSION['message']); // Clear the message after displaying
   //      echo '<script>window.location.href = "index.html";</script>'; // Redirect after showing the alert
   //      exit(); // Exit the script
   //  }
    
}
?>
