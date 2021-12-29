<?php

include 'conect.php';
$url = 'https://finalprojectcac.000webhostapp.com/php/confirmation.php';

if (isset($_POST['submit'])) {
    $id_user = $_POST['id_user'];
    $name_surname = $_POST['name'];
    $birth_date = $_POST['birth'];
    $email = $_POST['email'];
    $citizenship = $_POST['countries'];
    $discipline = $_POST['discipline'];
    $discipline_type = $_POST['typeOf'];
    $password = $_POST['password'];

    $query_select = "SELECT `password` FROM `users` WHERE `id_user`= '$id'";
    $run_select = mysqli_query($conection, $query_select);
    $data = mysqli_fetch_array($run_select);
    $password_hash = $data['password'];


    if (!empty($name_surname) && !empty($birth_date) && !empty($email) && !empty($citizenship) && !empty($discipline) && !empty($discipline_type) && $password_hash == $password) {
        $query_update = "UPDATE `users` 
                SET `name`='$name_surname',`birth`='$birth_date',`citizenship`='$citizenship',`discipline`='$discipline',`discipline_type`='$discipline_type',`email`='$email'
                WHERE `id_user` = '$id_user';";
        $run_query = mysqli_query($conection, $query_update);
        if ($run_query) {
            send_mail($email, $name_surname);
            header('Location:' . $url . '/?confirmation=' . $name_surname . '!' . "<br>" . '+Se+actualizo+correctamente');
        } else {
            header('Location:' . $url . '/?confirmation=Error:' . "<br>" . 'Ocurrio+un+problema+al+registrarse');
        }
    } else {
        header('Location:' . $url . '/?confirmation=Error:' . "<br>" . 'Uno+de+las+campos+estaba+vacio+o+su+contraseña+es+incorrecta');
    }
}

function send_mail($email, $name_surname)
{
    $to = $email;
    $header  = 'MIME-Version: 1.0' . "\r\n";
    $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $header .= 'From: Decathlon | noreply@decathlon.com.ar' . "\r\n";
    $header .= 'To: ' . $name_surname . " - " .  $to . "\r\n";
    $header .= 'X-Mailer: PHP/' . phpversion();
    $subject = ' Enviado desde Decathlon.com';
    $message = "Usuario actualizado correctamente \r\n" . "Atentamente el equipo de Decathlon";

    mail($to, $subject, $message, $header);
}
