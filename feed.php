<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- slider -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <!-- icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>

<body>
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
                  A transparência e a comunicação exemplares da SA são dignas de elogios. Eles me mantiveram informado durante todo o processo, explicando claramente todas as opções disponíveis e as possíveis consequências.
                  </p>

                  <div class="review-info">
                    <h3 class="review-name">Camila Carvalho </h3>
                    <h5 class="review-job">Administradora de Empresas</h5>
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
                  O conhecimento especializado do escritório é impressionante. 
                  </p>

                  <div class="review-info">
                    <h3 class="review-name">Gabriel Andrade</h3>
                    <h5 class="review-job">Dentista, SP</h5>
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
                  Recomendo calorosamente o escritório de advocacia SA a todos que precisam de assistência jurídica. Sua equipe se mostrou altamente profissional, ética e comprometida em buscar a justiça em meu caso.
                  </p>

                  <div class="review-info">
                    <h3 class="review-name">Pedro Santos</h3>
                    <h5 class="review-job">médico, SP</h5>
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
                  Estou impressionada com a abordagem proativa do escritório de advocacia em resolver meu caso. Eles identificaram rapidamente as melhores estratégias legais e me mantiveram informado sobre cada etapa do processo. Sua dedicação e profissionalismo são notáveis.
                  </p>

                  <div class="review-info">
                    <h3 class="review-name">RK Moda Feminina</h3>
                    <h5 class="review-job">Kattia, SP </h5>
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
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var mySwiper = new Swiper(".swiper-container", {
            speed: 1100,
            slidesPerView: 1,
            loop: true,
            autoplay: {
                delay: 3000,
            },
            navigation: {
                prevEl: ".swiper-button-prev",
                nextEl: ".swiper-button-next",
            },
        });
    </script>
</body>

</html>