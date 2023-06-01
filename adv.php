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
<article>
    <button class="scrollTop" onclick="backTop();">
      <img src="img/png/arrow2.png" alt="">
    </button>
  <section class="about">
    <div class="header-body">
      <div class="banner">
        <div class="decoration-left animation"></div>
        <div class="decoration-rigth animation"></div>
        <div class="overlay animation"></div>
        <img src="img/advogados/adv2.jpg" alt="" class="banner-img">
      </div>
      <div class="text">
        <div>
          <h1>Eduardo Moraes</h1>
          <p>Meu nome é Eduardo e sou um advogado tributário altamente experiente e especializado. Tenho dedicado minha carreira ao estudo aprofundado da legislação fiscal e tributária, e adquiri um amplo conhecimento nessa área.</p><br>
          <p>Minha abordagem profissional é meticulosa e analítica. Trabalho arduamente para garantir que meus clientes estejam em conformidade com as leis fiscais e possam aproveitar ao máximo as oportunidades de economia tributária. Ofereço serviços de consultoria e assessoria jurídica personalizados para empresas de diversos setores, desenvolvendo estratégias eficazes para minimizar riscos e otimizar o planejamento tributário.</p>
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
          <span>Direito Empresarial</span>
          <i class="fas fa-chevron-down d-arrow"></i>
        </button>
        <p>Assessorando empresas em questões contratuais, fusões e aquisições, incorporações, constituição e dissolução de empresas, entre outros assuntos relacionados ao ambiente empresarial.</p>
      </div>

      <div class="question">
        <button>
          <span>Direito Societário</span>
          <i class="fas fa-chevron-down d-arrow"></i>
        </button>
        <p>Prestando serviços de consultoria em relação à estruturação e funcionamento de sociedades, acordos de acionistas, governança corporativa, e outras questões jurídicas relacionadas às empresas.</p>
      </div>

      <div class="question">
        <button>
          <span>Direito Tributário</span>
          <i class="fas fa-chevron-down d-arrow"></i>
        </button>
        <p>Direito tributário é uma área do direito que trata das normas e princípios relacionados à tributação. Envolve o estudo e a aplicação das leis que regulamentam os impostos, taxas e contribuições exigidos pelos governos federal, estadual e municipal. Essa área abrange questões como planejamento tributário, obrigações fiscais, contencioso administrativo e judicial, além de oferecer consultoria para empresas e indivíduos sobre questões fiscais e tributárias.</p>
      </div>

      <div class="question">
        <button>
          <span>Direito Imobiliário</span>
          <i class="fas fa-chevron-down d-arrow"></i>
        </button>
        <p> Prestando serviços de consultoria na compra, venda e locação de imóveis, elaborando contratos de compra e venda, realizando due diligence imobiliária, entre outros.</p>
      </div>
    </div>
  </section>
  </article>
  <?php
  include('footer.php');
  ?>
   <!-- script do scroll -->
   <script>
    window.addEventListener('scroll', function() {
      let scroll = document.querySelector('.scrollTop')
      scroll.classList.toggle('active', window.scrollY > 250)
    })

    function backTop() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      })
    }
  </script>
  <script src="js/dark.js"></script>
  <script src="js/faq.js"></script>

</body>

</html>