<?php
include('menu.php');
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/adv.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>

<body class="dark">
    <section class="about">
        <div class="header-body">
            <div class="banner">
                <div class="decoration-left animation"></div>
                <div class="decoration-rigth animation"></div>
                <div class="overlay animation"></div>
                <img src="img/advogados/adv3.jpg" alt="" class="banner-img">
            </div>
            <div class="text">
                <div>
                    <h1>Rodrigo Santos</h1>
                    <p>Meu nome é Rodrigo e sou um advogado penal dedicado e apaixonado pela defesa dos direitos de meus clientes. Tenho uma vasta experiência em lidar com casos criminais complexos, onde minha abordagem estratégica e minuciosa é essencial para alcançar resultados positivos.</p><br>
                    <p>Como advogado penal, estou comprometido em proteger os direitos e liberdades fundamentais de cada indivíduo que confia em minha representação. Assumo a responsabilidade de estudar minuciosamente cada caso, analisando provas, investigando as circunstâncias e preparando uma defesa sólida.</p>
                </div>
            </div>
        </div>
    </section>
    <header>
        <h1>Atuações</h1>
    </header>
    <section class="faq">
        <div class="questions-container">
            <div class="question">
                <button>
                    <span>Direito Administrativo</span>
                    <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>Assessorando pessoas físicas ou jurídicas em questões relacionadas a licitações, contratos administrativos, recursos administrativos, entre outros aspectos envolvendo a Administração Pública.</p>
            </div>

            <div class="question">
                <button>
                    <span>Direito Civil</span>
                    <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>Lidando com questões relacionadas a contratos, responsabilidade civil, direito das obrigações, direito de família, direito das sucessões, entre outros.
                    Direito do Trabalho: Representando empregadores ou empregados em questões trabalhistas, como rescisões contratuais, assédio no ambiente de trabalho, reivindicações salariais, entre outros.</p>
            </div>

            <div class="question">
                <button>
                    <span>Direito de Família</span>
                    <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>Atuando em casos de divórcio, guarda de filhos, pensão alimentícia, adoção, entre outros aspectos relacionados às questões familiares.</p>
            </div>

            <div class="question">
                <button>
                    <span>Direito Penal</span>
                    <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>Pode ser caracterizado como o conjunto de normas que tem como objetivo principal regular o poder do Estado de punir, estabelecendo penas e consequências para atos que são considerados infratores. Esse assunto, pela sua própria definição, é extremamente cobrado no Exame da Ordem e concursos públicos</p>
            </div>
        </div>
    </section>
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
    <script src="js/faq.js"></script>
    <script src="js/adv.js"></script>
</body>

</html>