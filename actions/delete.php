<?php

include 'conect.php';
$id = $_GET['id'];
$url = 'http://localhost/php/confirmation.php';

$query_select = "SELECT `name`, `email`, `password` FROM `users` WHERE `id_user`= '$id'";
$run_select = mysqli_query($conection, $query_select);
$data = mysqli_fetch_array($run_select);
$password_hash = $data['password'];

$password_posted = $_POST['password'];

if (isset($_POST['submit'])) {
    if ($password_hash == $password_posted) {
        $query_delete = "DELETE FROM `users` WHERE `id_user` = '$id'";
        $run_query = mysqli_query($conection, $query_delete);
        if ($run_query) {
            header('Location:' . $url . '/?confirmation=El+registro+se+ha+eliminado+con+exito');
        } else {
            header('Location:' . $url . '/?confirmation=Error: <br> Ocurrio+un+problema+al+eliminar+el+registro');
        }
    } else {
        header('Location:' . $url . '/?confirmation=Error:<br>Clave+incorrecta');
    }
}else{
    echo "Erro";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decathlon - Contacto</title>
    <!-- favicon -->
    <link rel="icon" href="/img/favicon/favicon-32.png" sizes="32x32">
    <!-- link to css -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/forms.css">
    <link rel="stylesheet" href="/css/mobile.css">
    <!-- link to google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>

<body>
    <form action="" method="post">
        <div class="container-delete">
            <div class="delete__centered">
                <h3>Hola <?php echo  $data['name'] ?></h3>
                <div class="delete_centered-inputs">
                    <input type="email" name="email" id="email" value="<?php echo $data['email'] ?>">
                    <input type="password" name="password" id="password" placeholder="Coloque aquí su contraseña">
                    <a class="secondary-link" href="/index.html">Cancelar</a>
                    <input class="delete" type="submit" name="submit" id="submit" value="Sí, deseo eliminar mis datos"> <i class="fas fa-thrash-alt-can"></i>
                </div>
            </div>
        </div>
    </form>
</body>

</html>