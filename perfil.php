<?php
include('menu.php');
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>your profile</title>
    <link rel="stylesheet" href="css/perfil.css">
</head>

<body class="dark">
    <main>
        <?php
        require('connect.php');
        if ($_SESSION['login'] == true) {
            $perfils = mysqli_query($con, "SELECT * FROM `cadastro_login_cliente` WHERE `cadastro_login_cliente` = '$_SESSION[nome]'");
        } else if ($_SESSION['login'] == false) {
            $perfils = mysqli_query($con, "SELECT * FROM `tb_cliente_juridico` WHERE `tb_cliente_juridico`= '$_SESSION[nome]'");
        }
        $perfil = mysqli_fetch_array($perfils);
        echo "<div class=containers>";

        echo   "<section class=userProfile card>";
        echo       "<div class=profile>";
        echo       "<figure><img src=img/perfil/69.png alt=profile width=250px height250px></figure>";
        echo "</div>";
        echo "</section>";

        //informacoes do usuario
        echo "<section class=information card>";
        echo "<div class=info>";
        echo  " <div class=contact_Info>";
        echo   "<h1 class=heading>Informações de contato</h1>";
        echo "<ul>";
        echo "<li class=phone>";
        echo  "<h1 class=label>Celular:</h1>";
        echo "<span class=desc>(11) 96666-6666</span>";
        echo "</li>";

        echo     "<li class=address>";
        echo         "<h1 class=label>endereço:</h1>";
        echo         "<span class=desc>Brazuca, ZL</span>";
        echo     "</li>";
        echo    "<li class=email>";
        echo      "<h1 class=label>E-mail:</h1>";
        echo     "<span class=desc>storm@storm.com</span>";
        echo "</li>";

        echo     "<li class=site>";
        echo        "<h1 class=label>Site:</h1>";
        echo        "<span class=desc>www.storm.com</span>";
        echo      "</li>";
        echo   "</ul>";
        echo    ' <a href=logoff.php>';
        echo        '<button class="exit"><ion-icon name="exit-outline"></ion-icon>';
        echo            ' <i class="fas fa-fingerprint"></i>';
        echo     '    </button>';
        echo         '</a>';
        echo       "</div>";
        echo     "</div>";
        echo  "</section>";

        //detalhes do usuario
        echo  "<section class=userDetails card>";
        echo     "<div class=userName>";
        echo         "<h1 class=name>og.pigs</h1>";
        echo         "<p>produtor audiovisual</p>";
        echo     "</div>";
        echo    "<div class=btns>";
        echo        "<ul>";
        echo            "<li class=sendMsg>";
        ' <i class="ri-chat-4-fill ri"></i>';
        echo                ' <a href="#">enviar menssagem</a>';
        echo            "</li>";

        echo            "<li class=sendMsg active>";
        echo                '<i class="ri-check-fill ri"></i>';
        echo              '  <a href="#">contato</a>';
        echo            "</li>";
        echo       "</ul>";
        echo    "</div>";
        echo "</section>";


        //area informativa
        echo      "<section class=timeline_about card>";
        echo       "<div class=tabs>";
        echo         "<ul>";
        echo                        "<li class=about active>";
        echo                ' <i class="ri-user-3-fill ri"></i>';
        echo                 "<span>atualizações</span>";
        echo           " </li>";
        echo       " </ul>";
        echo   "</div>";

        echo    "<div class=contact_Info>";
        echo       " <ul>";
        echo           "<li class=phone>";
        echo              "<h1 class=label>caso:</h1>";
        echo              "<span class=info>69</span>";
        echo          "</li>";

        echo        "<li class=address>";
        echo            "<h1 class=label>status:</h1>";
        echo          "<span class=info>quase bom mané</span>";
        echo       "</li>";
        echo  "</ul>";
        echo   "</div>";
        echo    "</section>";
        echo   "</div>";
        ?>
    </main>
    <script src="js/dark.js"></script>
</body>

</html>