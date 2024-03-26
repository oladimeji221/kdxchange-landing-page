<?php


if (isset($_POST['submit'] )) {
    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $whatsapp  = $_POST['whatsapp'];
    $message  = $_POST['message'];


    $mailTo = "koladeo49@gmail.com";
    $headers = "from: ".$mailFrom;
    $txt = "You have a message ".$name.".\n\n".$message;


    mail($mailTo, $name, $txt, $headers);

    header("location: index.html?MessageSent");
}
?>