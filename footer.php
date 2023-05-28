<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/footer.css">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <!-- icon -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body class="dark">
    <footer>
        <div class="container">
            <div class="content-footer">
                <div class="profile">
                    <div class="logo-area">
                        <img src="" alt="">
                        <span class="logo-name">STORM ADVOCACY</span>
                    </div>
                    <div class="desc-area">
                        <p>Mantemos um olhar atento às mudanças, para garantir que nossa dedicação resulte em resultados jurídicos sólidos e satisfatórios.</p>
                    </div>
                    <div class="social-media">
                        <a href="https://www.instagram.com/_stormcomp/"><i class="uil uil-instagram"></i></a>
                        <a href=""><i class="uil uil-envelope-times"></i></a>
                        <a href=""><i class="uil uil-linkedin"></i></a>
                    </div>
                </div>
                <div class="service-area">
                    <ul class="service-header">
                        <li class="service-name">links</li>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="about.php">Sobre</a></li>
                        <li><a href="atuacoes.php">Áreas</a></li>
                        <?php
                        @session_start();
                        // @var_dump($_SESSION);
                        if (!isset($_SESSION['login'])) {
                            $_SESSION['login'] = false;
                        }
                        if ($_SESSION['login'] === true) {
                            echo   ' <li><a href=contato.php>Contato</a></li>';
                        } else {
                            echo   " <li><a href=error.php>Contato</a></li>";
                        }
                        ?>
                    </ul>
                    <ul class="service-header">
                        <li class="service-name">Sedes</li>
                        <li><a href="#!">São Paulo</a></li>
                        <li><a href="#!">Rio de Janeiro</a></li>
                        <li><a href="#!">Brasília</a></li>
                        <li><a href="#!">Estados Unidos</a></li>
                    </ul>

                </div>
            </div>
            <hr>
            <div class="footer-bottom">
                <div class="copy-right">
                    <i class="uil uil-copyright"></i>
                    <span>2023 advocacy</span>
                </div>
                <div class="termos">
                    <a href="#!">Termos de uso</a>
                    <a href="#!">Política de Privacidade </a>
                    <a href="#!">Cokies</a>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <script src="js/dark.js"></script>
</body>

</html>