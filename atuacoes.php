<?php
include('menu.php');
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link rel="stylesheet" href="css/atuacoes.css">
</head>

<body class="black">
    <section class="case">
        <div class="show-container">
            <h2>áreas de atuação</h2>
        </div>
    </section>
    <div class="row">
        <div class="col-1">
            <p>Nós entendemos o seu negócio e trabalhamos juntos para resolver desafios jurídicos com soluções inovadoras e multidisciplinares, combinando nossa visão global à experiência em mais de 40 práticas do Direito.</p>
        </div>
    </div>
    <section class="services section">
        <div class="container">
            <div class="section-body">
                <div class="filter">
                    <button class="filter-btn active" data-filter="*">Todos</button>
                    <button class="filter-btn" data-filter=".logo-1">Civil</button>
                    <button class="filter-btn" data-filter=".logo-2">Penal</button>
                    <button class="filter-btn" data-filter=".logo-3">Trabalhista</button>
                    <button class="filter-btn" data-filter=".logo-4">Tributário</button>
                </div>
            </div>
            <div class="grid">
                <div class="grid-item logo-4">
                    <div class="gallery-image">
                        <img src="img/atuacoes/card/adv2.jpg" alt="" />
                        <div class="img-overlay">
                        <a href="adv.php"><i class="uil uil-external-link-alt"></i></a>
                            <div class="img-description">
                                <h3>Eduardo</h3>
                                <h5>Moraes</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item logo-2">
                    <div class="gallery-image">
                        <img src="img/atuacoes/card/adv3.jpg" alt="" />
                        <div class="img-overlay">
                        <a href="adv2.php"><i class="uil uil-external-link-alt"></i></a>
                            <div class="img-description">
                                <h3>Rodrigo</h3>
                                <h5>Santos</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item logo-1">
                    <div class="gallery-image">
                        <img src="img/atuacoes/card/adv4.jpg" alt="" />
                        <div class="img-overlay">
                        <a href="adv3.php"><i class="uil uil-external-link-alt"></i></a>
                            <div class="img-description">
                                <h3>Renata</h3>
                                <h5>Oliveira</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item logo-3">
                    <div class="gallery-image">
                        <img src="img/atuacoes/card/adv1.jpg" alt="" />
                        <div class="img-overlay">
                        <a href="adv4.php"><i class="uil uil-external-link-alt"></i></a>
                            <div class="img-description">
                                <h3>Débora </h3>
                                <h5>Andrade</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
    <div class="container">
      <div class="content-footer">
        <div class="profile">
          <div class="logo-area">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/services.js"></script>
    <script src="js/dark.js"></script>
</body>

</html>