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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

</head>

<body class="dark">

    <section id=content>
        <main>
            <?php
            if (isset($_SESSION['msg'])) {
                echo "<p class=alert>$_SESSION[msg]</p>";
                unset($_SESSION['msg']);
            }
            require('connect.php');
            $perfis = mysqli_query($con, "SELECT * FROM `tb_cliente_juridico`");
            echo   "<div class=table-data>";
            echo    "<div class=order>";
            echo      "<div class=head>";
            echo          " <h3>Nossos Clientes Juridicos</h3>";
            echo  " <div class=search>";
            echo    "<input type=text class=search__input placeholder=buscar onkeyup=pesquisar(this.value)";
            echo   "<button class=search__button>";
            echo        '<svg class="search__icon" aria-hidden="true" viewBox="0 0 24 24">';
            echo           "<g>";
            echo               '<path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>';
            echo       "</g>";
            echo     "</svg>";
            echo   "</button>";
            echo "</div>";
            echo            "<i class='bx bx-filter'></i>";
            echo       "</div>";
            echo       "<table width=100%>";
            echo              "<thead>";
            echo                "<tr>";
            echo                     "<th>#</th>";
            echo                    "<th></span>CLIENTE</th>";
            echo                    "<th></span>CPF</th>";
            echo                  "<th></span>STATUS</th>";
            echo                  "<th></span>DADOS</th>";
            echo   "<div id=resultado>";
            while ($perfil = mysqli_fetch_array($perfis)) {
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
                echo "<td>";
                echo "<span class='status ";
                if ($perfil['status'] == "ativo") {
                    echo "success";
                } elseif ($perfil['status'] == "inativo") {
                    echo "danger";
                } elseif ($perfil['status'] == "ausente") {
                    echo "warning";
                }
                echo "'>$perfil[status]</span>";
                echo "</td>";
                echo  "<td>";
                echo  "<div id=icones>";
                echo  "<a href=./formularios/alterar-statusJ.php?cod=$perfil[cod]><i class='uil uil-edit'></i></a>";
                echo  "<a href=javascript:confirmar($perfil[cod])><i class='uil uil-trash-alt'></i></a>";
                echo  "</div>";
                echo "</td>";
            }
            echo "</div>";
            echo  "</tr>";
            echo        "</tbody>";
            echo   "</table>";
            echo   "</div>";
            ?>
        </main>
    </section>
    <Script>
        function pesquisar(texto) {
            $.ajax({
                type: "post",
                url: "pesquisaJ.act.php?texto=" + texto,
                success: function(response) {
                    $('#resultado').html(response);
                }
            });
        }

        function confirmar(cod) {
            resposta = confirm("deseja excluir o registro" + cod + "?");
            if (resposta == true) {
                window.location = "excluir-clienteJ.php?cod=" + cod;
            }
        }
    </Script>
    <script src="js/dark.js"></script>
</body>

</html>