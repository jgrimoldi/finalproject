<?php
include '../actions/conect.php';

$id_update = $_GET['id'];
$query_update = "SELECT * FROM `users` WHERE `id_user` = '$id_update' ";
$run_query = mysqli_query($conection, $query_update);
$row_update = mysqli_fetch_array($run_query)

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decathlon - Mi Perfil</title>
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
    <!-- header section starts -->
    <header class="header">
        <a href="/index.html" class="logo secondary-link" rel="noopener noreferrer">Decathlon</a>

        <nav class="navbar">
            <a class="secondary-link" href="/index.html" rel="noopener noreferrer">Inicio</a>
            <a class="secondary-link" href="/php/register.html" rel="noopener noreferrer">Inscripción</a>
            <a class="secondary-link" href="/php/participants.php" rel="noopener noreferrer">Participantes</a>
            <!-- <a class="secondary-link" href="/php/medals.html" rel="noopener noreferrer">Medallero</a> -->
            <a class="secondary-link" href="/php/contact.html" rel="noopener noreferrer">Contacto</a>
        </nav>

        <div class="icon">
            <div class="secondary-icon fas fa-ellipsis-h" id="menu-btn"></div>
        </div>

    </header>
    <!-- header section ends -->
    <main>
        <form class="form" action="/actions/update.php" method="post">
            <h2 class="secondary-title">Mi Perfil</h2>
            <div class="form__content">
                <div class="form__content-inputs-left">
                    <input type="hidden" name="id_user" value="<?php echo $row_update['id_user'] ?>">
                    <div class="input">
                        <input type="text" name="name" id="name" pattern="^([A-Za-z]+[,.]?[ ]?|[A-Za-z]+['-]?)+$" placeholder="Nombre(s)" value="<?php echo $row_update['name'] ?>" required>
                    </div>
                    <div class="input">
                        <label for="day">
                            <p class="secondary-text">Fecha de Nacimiento</p>
                        </label>
                        <div class="input">
                            <input type="date" name="birth" id="birth" value="<?php echo date('Y-m-d', strtotime($row_update['birth'])) ?>">
                        </div>
                    </div>
                    <div class="input">
                        <label for="discipline">
                            <p class="secondary-text">Disciplina</p>
                        </label>
                        <select name="discipline" id="discipline">
                            <option value="<?php echo $row_update['discipline'] ?>" selected><?php echo $row_update['discipline'] ?></option>
                            <option value="Carrera">Carrera</option>
                            <option value="Lanzamiento">Lanzamiento</option>
                            <option value="Salto">Salto</option>
                        </select>
                    </div>
                    <div class="input">
                        <input type="email" name="email" id="email" placeholder="Correo electrónico" value="<?php echo $row_update['email'] ?>" required>
                    </div>
                </div>
                <div class="form__content-inputs-rigth">
                    <div class="input">
                        <input type="password" name="password" id="password" placeholder="Coloque aquí su contraseña" required>
                    </div>
                    <div class="input">
                        <label for="countries">
                            <p class="secondary-text">Nacionalidad</p>
                        </label>
                        <select name="countries" id="countries">
                            <option value="<?php echo $row_update['citizenship'] ?>"><?php echo $row_update['citizenship'] ?></option>
                        </select>
                    </div>
                    <div class="input">
                        <label for="typeOf">
                            <p class="secondary-text">Tipo de prueba</p>
                        </label>
                        <select name="typeOf" id="typeOf">
                            <option value="<?php echo $row_update['discipline_type'] ?>" selected><?php echo $row_update['discipline_type'] ?></option>
                        </select>
                    </div>
                    <div class="input">
                        <div class="submit-wrapper"><input class="submit" type="submit" name="submit" id="submit" value="Actualizar"> <i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </form>
    </main>
    <!-- footer section starts -->
    <footer class="footer secondary-footer" id="footer">
        <div class="content">
            <div class="comunication">
                <p class="help-title">Comunicate con Decathlon</p>
                <p>De lunes a viernes de 9 a 14hs</p>
            </div>
            <div class="help">
                <p class="help-title">Ayuda</p>
                <div class="help-links">
                    <div class="left">
                        <a href="index.html" rel="noopener noreferrer">Inicio</a>
                        <a href="/php/register.html" rel="noopener noreferrer">Inscripción</a>
                        <a href="/php/participants.php" rel="noopener noreferrer">Participantes</a>
                        <a href="/php/medals.html" rel="noopener noreferrer">Medallero</a>
                    </div>
                    <div class="right">
                        <a href="/php/contact.html" rel="noopener noreferrer">Contacto</a>
                        <a href="#" rel="noopener noreferrer">Carreras</a>
                        <a href="#" rel="noopener noreferrer">Lanzamientos</a>
                        <a href="#" rel="noopener noreferrer">Saltos</a>
                    </div>
                </div>
            </div>
            <div class="social">
                <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">
                    <div class="fab fa-facebook-f"></div>
                </a>
                <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer">
                    <div class="fab fa-twitter"></div>
                </a>
                <a href="https://www.instagram.com/?hl=es-la" target="_blank" rel="noopener noreferrer">
                    <div class="fab fa-instagram"></div>
                </a>
                <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer">
                    <div class="fab fa-youtube"></div>
                </a>
            </div>
        </div>
        <div class="copyright">
            <p><i class="far fa-copyright"></i> 2021 Grimoldi. Todos los derechos reservados</p>
            <div class="terms">
                <a href="/help/terms.html" target="_blank" rel="noopener noreferrer">
                    <p>Términos de uso</p>
                </a>
                <a href="/help/privacy.html" target="_blank" rel="noopener noreferrer">
                    <p>Política de privacidad</p>
                </a>
            </div>
        </div>
    </footer>
    <!-- footer section ends -->

    <!-- link to fontawesome -->
    <script src="https://kit.fontawesome.com/65e563f321.js" crossorigin="anonymous"></script>
    <!-- link to js -->
    <script src="/js/script.js"></script>
    <script src="/js/country.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>