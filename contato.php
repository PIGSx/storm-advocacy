<?php
include('menu.php');
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contato</title>
    <link rel="stylesheet" href="css/contato.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>

<body class="dark">
    <section class="contact-section">
        <div class="contact-title">
            <h2>entre em contato</h2>
            <div class="line">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
        <div class="container">
            <div class="contact-info">
            <div>
            <span><i class = "fas fa-mobile-alt"></i></span>
            <span>telefone</span>
            <span class = "text">4002-8922</span>
          </div>
          <div>
            <span><i class = "fas fa-envelope-open"></i></span>
            <span>E-mail</span>
            <span class = "text">storm@storm.com</span>
          </div>
          <div>
            <span><i class = "fas fa-map-marker-alt"></i></span>
            <span>endereço</span>
            <span class = "text">rua xxx xxxx xxx</span>
          </div>
          <div>
            <span><i class = "fas fa-clock"></i></span>
            <span>horario de atendimento</span>
            <span class = "text">segunda - sexta (09:00 - 17:30)</span>
          </div>
        </div>

        <div class = "contact-form">
        <form action="https://formsubmit.co/storm.tcc04@gmail.com" method="POST" class="form">
            <div>
              <input type = "text" class = "form-control" placeholder="nome">
              <input type = "text" class = "form-control" placeholder="sobrenome">
            </div>
            <div>
              <input type = "email" class = "form-control" placeholder="E-mail">
              <input type = "text" class = "form-control" placeholder="assunto">
            </div>
            <textarea rows = "5" placeholder="mensgem" class = "form-control"></textarea>
            <input type = "submit" class = "send-btn" value = "enviar mensagem">
          </form>

          <div>
            <img src = "../img/contato/duvida.jpg" alt = "">
          </div>
        </div>
      </div>

      <div class = "map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14630.573915209152!2d-46.4742676!3d-23.5453221!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce66dec98fb855%3A0xf2b061ffbcd2ecf8!2sNeo%20Qu%C3%ADmica%20Arena!5e0!3m2!1spt-BR!2sbr!4v1680534310347!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
            </div>
        </div>
    </section>
    <footer>
    <div class="container">
      <div class="content-footer">
        <div class="profile">
          <div class="logo-area">
            <img src="" alt="">
            <span class="logo-name">STORM</span>
          </div>
          <div class="desc-area">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
              scrambled it to make a type specimen book.</p>
          </div>
          <div class="social-media">
            <a href=""><i class="uil uil-instagram"></i></a>
            <a href=""><i class="uil uil-envelope-times"></i></a>
            <a href=""><i class="uil uil-linkedin"></i></a>
          </div>
        </div>
        <div class="service-area">
          <ul class="service-header">
            <li class="service-name">Serviços</li>
            <li><a href="#!">staple</a></li>
            <li><a href="#!">staple</a></li>
            <li><a href="#!">staple</a></li>
            <li><a href="#!">staple</a></li>
          </ul>
          <ul class="service-header">
            <li class="service-name">Serviços</li>
            <li><a href="#!">staple</a></li>
            <li><a href="#!">staple</a></li>
            <li><a href="#!">staple</a></li>
            <li><a href="#!">staple</a></li>
          </ul>
          <ul class="service-header">
            <li class="service-name">Serviços</li>
            <li><a href="#!">staple</a></li>
            <li><a href="#!">staple</a></li>
            <li><a href="#!">staple</a></li>
            <li><a href="#!">staple</a></li>
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
          <a href="#!">term of use</a>
          <a href="#!">privacy policy</a>
          <a href="#!">cokie</a>
        </div>
      </div>
    </div>
  </footer>
  <script src="js/dark.js"></script>
</body>

</html>