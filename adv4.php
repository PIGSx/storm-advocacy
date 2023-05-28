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
        <img src="img/advogados/adv1.jpg" alt="" class="banner-img">
      </div>
      <div class="text">
        <div>
          <h1>Débora Andrade</h1>
          <p>Meu nome é Débora e sou uma advogada trabalhista apaixonada por defender os direitos dos trabalhadores. Tenho um profundo compromisso em promover a justiça e garantir que meus clientes sejam tratados com equidade e respeito no ambiente de trabalho.</p><br>
          <p>Como advogada trabalhista, atuo em diversas questões relacionadas ao direito do trabalho, incluindo rescisões contratuais, assédio no local de trabalho, reivindicações salariais, acordos coletivos, entre outros. Meu objetivo principal é assegurar que meus clientes tenham seus direitos trabalhistas protegidos e recebam uma compensação justa em situações de conflito.</p>
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
          <span>Direito do Consumidor Bancário</span>
          <i class="fas fa-chevron-down d-arrow"></i>
        </button>
        <p>Representando consumidores em questões relacionadas a contratos bancários, tarifas abusivas, cobranças indevidas, entre outros problemas específicos do setor bancário.</p>
      </div>

      <div class="question">
        <button>
          <span>Direito Trabalhista</span>
          <i class="fas fa-chevron-down d-arrow"></i>
        </button>
        <p>é um ramo do direito privado que é responsável por regular a relação jurídica entre trabalhadores e empregadores, baseado nos princípios e leis trabalhistas. </p>
      </div>
      <div class="question">
        <button>
          <span>Direito Previdenciário</span>
          <i class="fas fa-chevron-down d-arrow"></i>
        </button>
        <p>Atuando em casos relacionados a benefícios previdenciários, como aposentadoria, pensão por morte, auxílio-doença, entre outros direitos previdenciários.</p>
      </div>
    </div>
  </section>
  <?php
  include('footer.php');
  ?>
  <script src="js/dark.js"></script>
  <script src="js/faq.js"></script>
  <script src="js/adv.js"></script>
</body>

</html>