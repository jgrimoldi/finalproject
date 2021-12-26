<?php
include '../actions/data.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decathlon - Participantes</title>
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
        <section class="form form-delete w-100">
            <h2 class="secondary-title">Participantes</h2>
            <div class="participants">
                <!-- <div class="radio-group">
                    <input type="radio" name="discipline" id="" class="participants-radio radio-run"
                        value="Carrera" checked>
                    <input type="radio" name="discipline" id="" class="participants-radio radio-throw"
                        value="Lanzamiento">
                    <input type="radio" name="discipline" id="" class="participants-radio radio-jump"
                        value="Salto">
                </div>
                <div class="radio-group-test" id="tests">
                    <label class="label-test" for="test-1"><input class="test" type="radio" name="test" id="test-1"
                            checked>100m lisos</label>
                    <label class="label-test" for="test-2"><input class="test" type="radio" name="test" id="test-2">400m
                        lisos</label>
                    <label class="label-test" for="test-3"><input class="test" type="radio" name="test" id="test-3">110m
                        vallas</label>
                    <label class="label-test" for="test-4"><input class="test" type="radio" name="test"
                            id="test-4">1500m lisos</label>
                </div> -->
                <div class="table">
                    <div class="table-participants">
                        <div class="table-row table-title">
                            <div class="column ">Posicion</div>
                            <div class="column">Participantes</div>
                            <div class="column">País</div>
                            <div class="column">Disciplina</div>
                            <div class="column ">Edit</div>
                        </div>
                        <?php while ($row_select = mysqli_fetch_array($run_query)) {
                            $i++; ?>
                            <div class="table-row">
                                <div class="column "><?php echo $i; ?></div>
                                <div class="column"><?php echo $row_select['name']; ?></div>
                                <div class="column"> <img class="flag" src="/img/flags/<?php echo  $row_select['citizenship']['code']; ?>" alt="Bandera de <?php echo $row_select['citizenship']; ?>"> <?php echo $row_select['citizenship']; ?></div>
                                <div class="column"><?php echo $row_select['discipline']; ?></div>
                                <div class="column "><a href="update.php/?id=<?php echo $row_select['id_user'] ?>"><i class="fas fa-user-edit"></i></a><a href="/actions/delete.php/?id=<?php echo $row_select['id_user'] ?>"><i class="fas fa-trash-alt"></i></a></div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- footer section starts -->
    <footer class="footer footer_relative" id="footer">
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
    <script src="/js/toggle.js"></script>
</body>

</html>