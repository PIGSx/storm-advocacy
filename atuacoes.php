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
            <h2>Onde atuamos</h2>
            <p>Nós entendemos o seu negócio e trabalhamos juntos para resolver desafios jurídicos com soluções inovadoras e multidisciplinares, combinando nossa visão global à experiência em mais de 40 práticas do Direito.</p>
        </div>
    </div>
    <section class="services section">
        <div class="container">
            <div class="section-body">
                <div class="filter">
                    <button class="filter-btn active" data-filter="*">todos</button>
                    <button class="filter-btn" data-filter=".logo-1">new</button>
                    <button class="filter-btn" data-filter=".logo-2">new2</button>
                    <button class="filter-btn" data-filter=".logo-3">new3</button>
                    <button class="filter-btn" data-filter=".logo-4">new4</button>
                </div>
            </div>
            <div class="grid">
                <div class="grid-item logo-4">
                    <div class="gallery-image">
                        <img src="img/atuacoes/card/1.PNG" alt="" />
                        <div class="img-overlay">
                        <a href="adv.php"><i class="uil uil-external-link-alt"></i></a>
                            <div class="img-description">
                                <h3>titulo</h3>
                                <h5>sub</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item logo-2">
                    <div class="gallery-image">
                        <img src="img/atuacoes/card/3.PNG" alt="" />
                        <div class="img-overlay">
                        <a href="advogados2.php"><i class="uil uil-external-link-alt"></i></a>
                            <div class="img-description">
                                <h3>titulo</h3>
                                <h5>sub</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item logo-1">
                    <div class="gallery-image">
                        <img src="img/atuacoes/card/2.PNG" alt="" />
                        <div class="img-overlay">
                        <a href="#!"><i class="uil uil-external-link-alt"></i></a>
                            <div class="img-description">
                                <h3>titulo</h3>
                                <h5>sub</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item logo-3">
                    <div class="gallery-image">
                        <img src="img/atuacoes/card/4.PNG" alt="" />
                        <div class="img-overlay">
                        <a href="#!"><i class="uil uil-external-link-alt"></i></a>
                            <div class="img-description">
                                <h3>titulo</h3>
                                <h5>sub</h5>
                            </div>
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
                        <img src="" alt="">
                        <span class="logo-name">STORM</span>
                    </div>
                    <div class="desc-area">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/services.js"></script>
    <script src="js/dark.js"></script>
</body>

</html>