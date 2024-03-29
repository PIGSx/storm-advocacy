<?php
include('menu.php');
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/about.css">
  <!-- icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <!-- icon -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <!-- scroll -->
  <script src="https://unpkg.com/scrollreveal"></script>
  <!-- alert -->
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<body>
  <article>
    <button class="scrollTop" onclick="backTop();">
      <img src="img/png/arrow2.png" alt="">
    </button>

    <section id="showcase">
      <div id="show-container">
        <h2><span>O ESCRITÓRIO</span></h2>
        <p>Há 40 anos, olhando o futuro e fazendo história.</p>
      </div>
    </section>
    <section class="about">
      <div class="inner-container">
        <h1>Sobre nós</h1>
        <p>Trabalhamos com assuntos complexos porque somos motivados pelo desafio. Trabalhamos com dedicação e
          atenção extraordinários porque investimos paixão no que fazemos.<br>
          Somos um escritório de advocacia com visão global e advogados especializados em todas as áreas do
          direito. Independentemente, há 40 anos, continuamos a etica e a excelência como nossos valores
          fundamentais. Somos multidisciplinares e atuantes. Diversificada e inovadora para fazer crescer os
          negócios dos nossos clientes e melhorar a sociedade como um todo.</p>
        <div class="button">
        </div>
      </div>
    </section>
    <section class="texts">
      <div class="container">

        <div class="col-4">
          <h1>Storm Advocacy</h1>
          <p>Somos um escritório jurídico multidisciplinar em constante evolução, com 40 anos de
            experiência
            em oferecer soluções especializadas e contemporâneas para nossos clientes crescerem e
            prosperarem em ambientes cada vez mais complexos e desafiadores. Comprometidos com altos
            padrões
            éticos, nosso atendimento é ágil e de alta qualidade, primando pela confiança,
            profissionalismo
            e transparência.<br><br>
            Contamos com equipes altamente qualificadas em todas as áreas do Direito, mantendo vivos os
            valores e a tradição que nos trouxeram até aqui. Além disso, temos correspondentes em todo o
            Brasil e relacionamentos estreitos com diversos escritórios de advocacia de primeira linha
            em
            diferentes países, estando preparados para lidar com questões transnacionais de empresas de
            todos os portes, geografias e segmentos.<br><br>
            Buscamos estar sempre atentos e prontos para reagir às novas oportunidades, tendências e
            desafios, trabalhando com seriedade, conhecimento profundo e respeito aos padrões de
            responsabilidade exigidos pela sociedade. Sendo um escritório brasileiro de visão global,
            nosso
            desafio é compreender o futuro e buscar soluções que atendam às necessidades e anseios de
            nossos
            clientes.<br><br>
            Acreditamos que o Direito aprimora os negócios e a sociedade, e por isso buscamos exercê-lo
            com
            excelência e respeito ao próximo. Nossos valores fundamentais, juntamente com nossa
            estrutura
            robusta de governança e visão institucional, nos tornam um escritório jurídico confiável e
            preparado para enfrentar desafios cada vez maiores.</p>
        </div>
        <div class="col-3">
          <img src="img/about/reconhecimento/wallpaper.jpg">
        </div>
      </div>
      <div class="row">
        <div class="col-2">
          <img src="img/about/reconhecimento/1.png" id="banner">
        </div>
        <div class="col-1">
          <h1>Tradição em inovação</h1>
          <p>Com quatro décadas de atuação e clientes atendidos em mais de 80 países, desenvolvemos uma cultura
            própria e integrada, focada em evoluir a forma como os serviços jurídicos são prestados no
            Brasil.<br>
            Combinando tradição e inovação, praticamos uma abordagem dinâmica e exclusiva. Da tradição, trazemos
            a experiência e a excelência que nos prepararam para lidar com a complexidade do cenário jurídico
            brasileiro.<br>
            Mantemos, ao mesmo tempo, o olhar para o futuro: antecipamos possibilidades, criamos soluções
            inovadoras, investimos no desenvolvimento de talentos, somos ativos em ações de responsabilidade
            socioambiental, incentivando um ambiente plural e estando à frente de discussões relevantes para o
            País.</p>
          <ul>
            <li class="btn active"></li>
            <li class="btn"></li>
            <li class="btn"></li>
          </ul>
        </div>
        <script>
          var btn = document.getElementsByClassName("btn");
          var banner = document.getElementById("banner");

          btn[0].onclick = function() {
            banner.src = "img/about/reconhecimento/1.png";
            animation()
            this.classList.add("active");
          }
          btn[1].onclick = function() {
            banner.src = "img/about/reconhecimento/2.png";
            animation()
            this.classList.add("active");
          }
          btn[2].onclick = function() {
            banner.src = "img/about/reconhecimento/3.png";
            animation()
            this.classList.add("active");
          }

          function animation() {
            for (b of btn) {
              b.classList.remove("active");
            }
          }
        </script>
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
  <script src="js/scroll.js"></script>
</body>

</html>