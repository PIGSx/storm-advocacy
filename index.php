<?php
include('menu.php');
include('poup.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADVOCACY</title>
  <link rel="stylesheet" href="css/index.css">
  <!-- slider -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <!-- icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <!-- icon -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <!-- alert -->
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
  <!-- scroll -->
  <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body class="dark">
  <section class="home">
    <video class="video-slide active" src="mp4/home/reuniao.mp4" autoplay muted loop></video>
    <video class="video-slide" src="mp4/home/digitando.mp4" autoplay muted loop></video>
    <video class="video-slide" src="mp4/home/mulher-andando.mp4" autoplay muted loop></video>
    <div class="content active">
      <h1>Orientação Jurídica Personalizada para Você</h1>
      <p>Com um compromisso inabalável, trabalhamos com afinco para entender as necessidades individuais de cada cliente e oferecer orientação jurídica sólida e personalizada. </p>
      <?php
      @session_start();
      // @var_dump($_SESSION);
      if (!isset($_SESSION['login'])) {
        $_SESSION['login'] = false;
      }
      if ($_SESSION['login'] === true) {
        echo   '<a href=contato.php>Contato</a>';
      } else {
        echo   "<a href=error.php>Contato</a>";
      }
      ?>
    </div>
    <div class="content">
      <h1>Sempre Atualizados e Informados</h1>
      <p> Nossa dedicação em acompanhar de perto as pesquisas e desenvolvimentos no campo do direito nos permite oferecer soluções estratégicas e eficazes para atender às necessidades específicas de cada cliente.</p>
      <a href="atuacoes.php">áreas</a>
    </div>
    <div class="content">
      <h1>Mundo em Evolução</h1>
      <p>No mundo atual, onde as demandas profissionais estão em constante evolução, a produtividade, flexibilidade e proatividade se tornaram fundamentais para o sucesso. </p>
      <a href="about.php">sobre</a>
    </div>
    <div class="media-icons">
      <a href="error.php"><i class="fab fa-facebook-f"></i></a>
      <a href="error.php"><i class="fab fa-instagram"></i></a>
      <a href="error.php"><i class="fab fa-twitter"></i></a>
    </div>
    <div class="slider-navigation">
      <div class="nav-btn active"></div>
      <div class="nav-btn"></div>
      <div class="nav-btn"></div>
    </div>
  </section>
  <section class="about" id="about">
    <div class="main">
      <video src="mp4/logo/logo-glitch.mp4" autoplay muted loop></video>
      <!-- <img src="img/about/designer.PNG"> -->
      <div class="all-text">
        <h4>Sobre <span>Nós</span></h4>
        <h1>STORM ADVOCACY</h1>
        <p>
          Nós acreditamos que os nossos talentos são os pilares fundamentais do nosso negócio. Por isso, não apenas
          investimos em desenvolver profissionais qualificados, mas também em formar pessoas com habilidades para
          enfrentar os desafios do mundo contemporâneo.</p>
        <a href="about.php"><button>Nossa História</button></a>
      </div>
    </div>
  </section>
  <section class="details">
    <div class="container">
      <div class="wrap">
        <div class="details-circle">
          <h2 class="number">40</h2>
          <h4 class="sub-title">anos de experiência</h4>
        </div>
      </div>

      <div class="wrap">
        <div class="details-circle active">
          <h2 class="number">140</h2>
          <h4 class="sub-title">clientes satisfeitos</h4>
        </div>
      </div>

      <div class="wrap">
        <div class="details-circle">
          <h2 class="number">60</h2>
          <h4 class="sub-title">casos pro bono em 2022</h4>
        </div>
      </div>

      <div class="wrap">
        <div class="details-circle">
          <h2 class="number">220</h2>
          <h4 class="sub-title">empresas atendidas</h4>
        </div>
      </div>
    </div>
  </section>
  <section class="areas">
    <div class="areas-text">
      <h4>Áreas</h4>
      <h1>atuações</h1>
      <p>Somos um escritório de advocacia com visão global e advogados especialistas em diversas praticas do
        Direito.</b>
      </p>
      <a href="atuacoes.php"><button class="button">áreas</button></a>
    </div>
    <div class="main">
      <img src="img/atuacoes/png/sa-red.PNG">
    </div>
  </section>
  <section class="login">
    <div class="inner-container">
      <h1>Receba nossas atualizações jurídicas</h1>
      <p>Para ler onde e quando quiser. Selecione os temas de interesse e cadastre-se preenchendo os campos
        obrigatórios.</p>
      <a class="fancy" onclick="alert()">
        <span class="top-key"></span>
        <span class="text">login</span>
        <span class="bottom-key-1"></span>
        <span class="bottom-key-2"></span>
      </a>
    </div>
  </section>
  <section class="app" id="app">
    <h1 class="heading"> storm app</h1>
    <div class="column">
      <div class="image">
        <img src="img/app/app.png" alt="">
      </div>
      <div class="content" id="ap">
        <h3>Solução fácil e perfeita no seu dispositivo móvel</h3>
        <p>Descubra o futuro da advocacia com o nosso novo aplicativo revolucionário: Advogo! Com
          S-ADVOCACY, a prática do direito está prestes a mudar para sempre.
        </p>
        <p>S-ADVOCACY é a ferramenta definitiva para advogados modernos que desejam simplificar sua rotina e aumentar sua produtividade. Nosso aplicativo oferece uma variedade de recursos inteligentes e intuitivos, projetados para otimizar sua prática jurídica e fornecer uma experiência aprimorada para você e seus clientes.</p>
        <div class="buttons">
          <a href="error.php" class="btn"> <i class="fab fa-apple"></i> app store </a>
          <a href="error.php" class="btn"> <i class="fab fa-google-play"></i> google-play </a>
        </div>
      </div>
    </div>
  </section>
  <header id="show-review">
    <section class="feedback section" id="feedback">
      <div class="container">
        <div class="section-header">
          <h3 class="title" data-title="Oque as pessoas dizem sobre a">SA</h3>
        </div>
        <div class="testi-content grid-2">
          <div class="column-1 reviews">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide review">
                  <i class="fas fa-quote-left quote"></i>
                  <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>

                  <p class="review-text">
                    Desde o primeiro contato até a conclusão do caso, fui tratado com respeito e recebi respostas claras e precisas para todas as minhas dúvidas e preocupações.
                  </p>

                  <div class="review-info">
                    <h3 class="review-name">Lucas Rodrigues</h3>
                    <h5 class="review-job">Designer Gráfico, SP</h5>
                  </div>
                </div>

                <div class="swiper-slide review">
                  <i class="fas fa-quote-left quote"></i>
                  <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>

                  <p class="review-text">
                    Relação custo-benefício: SA ofereceu serviços jurídicos de qualidade a um preço justo e razoável. Considerando a expertise da equipe e os resultados obtidos, considero que recebi um excelente custo-benefício.
                  </p>

                  <div class="review-info">
                    <h3 class="review-name">Larissa Costa</h3>
                    <h5 class="review-job">Recepcionista, RJ</h5>
                  </div>
                </div>

                <div class="swiper-slide review">
                  <i class="fas fa-quote-left quote"></i>
                  <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>

                  <p class="review-text">
                    Fortaleceram muito na criação do sistema para barbearia.
                  </p>

                  <div class="review-info">
                    <h3 class="review-name">Diego Acelino</h3>
                    <h5 class="review-job">Director of BarberShop, SP</h5>
                  </div>
                </div>

                <div class="swiper-slide review">
                  <i class="fas fa-quote-left quote"></i>
                  <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>

                  <p class="review-text">
                    Trabalho e atendimento excelente, com certeza recomendo a empresa. Obrigado pela agilidade e atenção dada no projeto para criação do site da minha empresa.
                  </p>

                  <div class="review-info">
                    <h3 class="review-name">Vitória Toccacelli</h3>
                    <h5 class="review-job">enfermeira, SP</h5>
                  </div>
                </div>

                <div class="swiper-slide review">
                  <i class="fas fa-quote-left quote"></i>
                  <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>

                  <p class="review-text">
                    Gostaria de dizer que o atendimento, administração da storm é surreal de bom. Parabéns a todos os envolvidos!!👏👏
                  </p>

                  <div class="review-info">
                    <h3 class="review-name">Sofia Arruda</h3>
                    <h5 class="review-job">Confeiteira, SP </h5>
                  </div>
                </div>
              </div>

              <div class="review-nav swiper-button-prev">
                <i class="fas fa-long-arrow-alt-left"></i>
              </div>
              <div class="review-nav swiper-button-next">
                <i class="fas fa-long-arrow-alt-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>
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
  <script src="js/home.js"></script>
  <script src="js/dark.js"></script>
  <script src="js/details.js"></script>
  <script src="js/app.js"></script>
  <script src="js/alert.js"></script>
  <script src="js/scroll.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>

</body>

</html>