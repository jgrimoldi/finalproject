<?php

include 'conect.php';
$url = 'https://finalprojectcac.000webhostapp.com/php/confirmation.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $name_surname = $name . ' ' . $surname;
    $birth_date =  $_POST['year'] . '/' . $_POST['month'] . '/' . $_POST['day'];
    $email = $_POST['email'];
    $citizenship = $_POST['countries'];
    $discipline = $_POST['discipline'];
    $discipline_type = $_POST['typeOf'];
    if (!empty($name) && !empty($surname) && !empty($birth_date) && !empty($email) && !empty($citizenship) && !empty($discipline) && !empty($discipline_type)) {
        $password = password_generator();
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $verify_email = mysqli_query($conection, "SELECT * FROM users WHERE email ='$email' ");
        if (mysqli_num_rows($verify_email) > 0) {
            header('Location:' . $url . '/?confirmation=Error:' . "<br>" . 'El+correo+que+intenta+registrar+ya+se+encuentra+utlizado');
        } else {
            $query_insert = "INSERT INTO `users` (`name`, `birth`, `citizenship`, `discipline`, `discipline_type`, `email`, `password`) VALUES ('$name_surname','$birth_date','$citizenship','$discipline','$discipline_type', '$email','$password_hash')";
            $run_query = mysqli_query($conection, $query_insert);
            if ($run_query) {
                send_mail($email, $name_surname, $password);
                header('Location:' . $url . '/?confirmation=' . $name_surname . '!' . "<br>" . '+Se+ha+registrado+correctamente');
            } else {
                header('Location:' . $url . '/?confirmation=Error:' . "<br>" . 'Ocurrio+un+problema+al+registrarse');
            }
        }
    } else {
        header('Location:' . $url . '/?confirmation=Error:' . "<br>" . 'Uno+de+las+campos+estaba+vacio');
    }
}


function password_generator()
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890~`!@#$%^&*()_-+={[}]|\:;"<,>.?/';
    $password = array();
    $password_length = 10;
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < $password_length; $i++) {
        $n = rand(0, $alphaLength);
        $password[] = $alphabet[$n];
    }
    return implode($password); //turn the array into a string
}


function send_mail($email, $name_surname, $password)
{
    $to = $email;
    $header  = 'MIME-Version: 1.0' . "\r\n";
    $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $header .= 'From: Decathlon | noreply@decathlon.com.ar' . "\r\n";
    $header .= 'To: ' . $name_surname . " - " .  $to . "\r\n";
    $header .= 'X-Mailer: PHP/' . phpversion();
    $subject = ' Enviado desde Decathlon.com';
    $message = "Las clave en caso de necesitar hacer un cambio de información es: " . $password . ". Por favor conservela con usted, en caso de extravío comuniquese con la empresa. \r\n" . "Recuerde que Decathlon nunca le va a solicitar estos datos. Gracias por participar \r\n" . "Atentamente el equipo de Decathlon";

    mail($to, $subject, $message, $header);
}

mysqli_close($conection);
