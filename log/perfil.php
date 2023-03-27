<?php
include('menu-log.php');
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>your profile</title>
    <link rel="stylesheet" href="../css/perfil.css">
</head>

<body class="dark">
    <main>
    <div class="containers">

        <!--  User Main-Profile  -->
        <section class="userProfile card">
            <div class="profile">
                <figure><img src="../img/perfil/69.png" alt="profile" width="250px" height="250px"></figure>
            </div>
        </section>

        <!--  Work & Skills Section -->
        <section class="information card">

            <!--  Work Contaienr  -->
            <div class="info">
                <div class="contact_Info">
                    <h1 class="heading">Informações de contato</h1>
                    <ul>
                        <li class="phone">
                            <h1 class="label">Celular:</h1>
                            <span class="desc">(11) 96666-6666</span>
                        </li>

                        <li class="address">
                            <h1 class="label">endereço:</h1>
                            <span class="desc">Brazuca, ZL</span>
                        </li>

                        <li class="email">
                            <h1 class="label">E-mail:</h1>
                            <span class="desc">storm@storm.com</span>
                        </li>

                        <li class="site">
                            <h1 class="label">Site:</h1>
                            <span class="desc">www.storm.com</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--  User Details Sections  -->
        <section class="userDetails card">
            <div class="userName">
                <h1 class="name">og.pigs</h1>
                <p>produtor audiovisual</p>
            </div>
            <div class="btns">
                <ul>
                    <li class="sendMsg">
                        <i class="ri-chat-4-fill ri"></i>
                        <a href="#">enviar menssagem</a>
                    </li>

                    <li class="sendMsg active">
                        <i class="ri-check-fill ri"></i>
                        <a href="#">contato</a>
                    </li>
                </ul>
            </div>
        </section>


        <!-- Timeline & About Sections  -->
        <section class="timeline_about card">
            <div class="tabs">
                <ul>
                    <li class="about active">
                        <i class="ri-user-3-fill ri"></i>
                        <span>atualizações</span>
                    </li>
                </ul>
            </div>

            <div class="contact_Info">
                <ul>
                    <li class="phone">
                        <h1 class="label">caso:</h1>
                        <span class="info">69</span>
                    </li>

                    <li class="address">
                        <h1 class="label">status:</h1>
                        <span class="info">quase bom mané</span>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    </main>
    <script src="../js/dark.js"></script>
</body>

</html>