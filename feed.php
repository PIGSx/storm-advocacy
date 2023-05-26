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