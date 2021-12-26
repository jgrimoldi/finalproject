<?php
$confirmation = $_GET['confirmation'];
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
    <section class="form w-100">
        <h2 class="confirmacion-title"><?php
                                        echo $confirmation;
                                        ?></h2>
    </section>
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
</body>

</html>