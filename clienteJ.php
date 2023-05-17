<?php
include('menu-admin.php');
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>

<body class="dark">

    <section id=content>
        <main>
            <?php
            require('connect.php');
            $perfis = mysqli_query($con, "SELECT * FROM `tb_cliente_juridico`");
            echo   "<div class=table-data>";
            echo    "<div class=order>";
            echo      "<div class=head>";
            echo          " <h3>Nossos Clientes</h3>";
            echo            "<i class='bx bx-search'></i>";
            echo            "<i class='bx bx-filter'></i>";
            echo       "</div>";
            echo       "<table width=100%>";
            echo              "<thead>";
            echo                "<tr>";
            echo                     "<th>#</th>";
            echo                    "<th></span>CLIENTE</th>";
            echo                    "<th></span>CPF</th>";
            echo                  "<th></span>STATUS</th>";
            while($perfil = mysqli_fetch_array($perfis)){
            echo             "</tr>";
            echo        "</thead>";
            echo        "<tbody>";
            echo          "<tr>";
            echo              "<td class=cod>$perfil[cod]</td>";
            echo             "<td>";
            echo   "<div class=client>";
            echo   "<div class=client-info>";
            echo  "<h4>$perfil[nome]</h4>";
            echo  "<small>$perfil[email]</small>";
            echo   "</div>";
            echo  "</div>";
            echo  "</td>";
            echo  "<td>$perfil[cnpj]</td>";
            echo  "<td>";
            echo  "<span class=status>ativo</span>";
            echo "</td>";
        }
            echo  "</tr>";
            echo        "</tbody>";
            echo   "</table>";
            echo   "</div>";
            ?>
        </main>
    </section>

    <script src="js/dark.js"></script>
</body>

</html>