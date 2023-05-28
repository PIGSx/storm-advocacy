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
    <!-- icon -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- alert -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">

</head>

<body class="dark">
    <main>
        <?php
        require('connect.php');
        if ($_SESSION['login'] == true && $_SESSION['tipo'] == 1) {
            $perfils = mysqli_query($con, "SELECT * FROM `cadastro_login_cliente` WHERE `cadastro_login_cliente`.`cod` = '$_SESSION[cod]'");
        } else if ($_SESSION['login'] == true  && $_SESSION['tipo'] == 2) {
            $perfils = mysqli_query($con, "SELECT * FROM `tb_cliente_juridico` WHERE `tb_cliente_juridico`.`cod`= '$_SESSION[cod]'");
        }
        $perfil = mysqli_fetch_array($perfils);
        echo "<div class=containers>";

        echo   "<section class=userProfile card>";
        echo       "<div class=profile>";
        echo       "<figure><img src=formularios/$perfil[foto] alt=profile width=250px height250px></figure>";
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
        echo "<span class=desc>$perfil[celular]</span>";
        echo "</li>";

        echo     "<li class=address>";
        echo         "<h1 class=label>endereço:</h1>";
        echo         "<span class=desc>$perfil[endereco]</span>";
        echo     "</li>";
        echo    "<li class=email>";
        echo      "<h1 class=label>E-mail:</h1>";
        echo     "<span class=desc>$perfil[email]</span>";
        echo "</li>";
        echo     "<li class=site>";
        
        if (isset($perfil['cpf'])){
            echo        "<h1 class=label>CPF:</h1>";
            echo        "<span class=desc>$perfil[cpf]</span>";
        }else{
            echo        "<h1 class=label>CNPJ:</h1>";
            echo        "<span class=desc>$perfil[cnpj]</span>";
        }
      
        echo      "</li>";
        echo   "</ul>";
        echo    ' <a href=logoff.php>';
        echo        '<button class="exit">
        <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
        <div class="text">Logout</div></button>';
        echo         '</a>';
        echo       "</div>";
        echo     "</div>";
        echo  "</section>";

        //detalhes do usuario
        echo  "<section class=userDetails card>";
        echo     "<div class=userName>";
        echo         "<h1 class=name>$perfil[nome]</h1>";
        echo     "</div>";
        echo    "<div class=btns>";
        echo        "<ul>";
        echo            "<li class=sendMsg>";
        echo                '<i class="ri-chat-4-fill ri"></i>';
        echo                ' <a href="./formularios/alterar-cliente.php">alterar dados</a>';
        echo            "</li>";

        echo            "<li class=sendMsg active>";
        echo                '<i class="ri-check-fill ri"></i>';
        echo            '  <a onclick=exibirSweetAlert()>agendamento</a>';
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
        echo   "<div class=wrapper>";
        echo   "<div class=select-btn>";
        echo    "<span>pesquisas jurídicas</span>";
        echo     '<i class="uil uil-angle-down"></i>';
        echo   "</div>";
        echo   "<div class=content>";
        echo     "<div class=search>";
        echo     '<i class="uil uil-search"></i>';
        echo    "<input spellcheck=false type=text placeholder=buscar>";
        echo  "</div>";
        echo  "<ul class=options></ul>";
        echo  "</div>";
        echo  "</div>";

        echo  "</ul>";
        echo   "</div>";
        echo    "</section>";
        echo   "</div>";
        ?>
    </main>
    <script src="js/perfil.js"></script>
    <script src="js/dark.js"></script>
    <script src="js/alert2.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>

</body>

</html>