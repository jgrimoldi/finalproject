<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $text = $_POST['message'];
    $url = 'http://localhost/php/confirmation.php';

    if (!empty($name) && !empty($surname) && !empty($email) && !empty($text)) {
        sendMail($name, $surname, $email, $text, $url);
    } else {
        header('Location:' . $url . '/?confirmation=Error:'. "<br>" . 'Uno+de+las+campos+estaba+vacio');
    }
}

function sendMail($name, $surname, $email, $text, $url)
{
    $to = 'joaquin_grimoldi@hotmail.com';
    $header  = 'MIME-Version: 1.0' . "\r\n";
    $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $header .= 'From:' . $name . " " . $email . "\r\n";
    $header .= 'To: Decathlon: ' . $to . "\r\n";
    $header .= 'X-Mailer: PHP/' . phpversion();
    $subject = ' Enviado desde Decathlon.com';
    $message = str_replace("\n.", "\n..", $text);

    $success = mail($to, $subject, $message, $header);

    if ($success) {
        header('Location:' . $url . 'thanks/' . $name . '-' . $surname);
    } else {
        $errorMessage = error_get_last()['message'];
        header('Location:' . $url . 'error/' . $errorMessage);
    }
}

?>