<link rel="stylesheet" href="css/admin.css">
<?php
    @session_start();

    $texto = $_GET['texto'];

    require('connect.php');
        if(!$texto == ""){
            $perfis = mysqli_query($con, "SELECT * FROM `cadastro_login_cliente`  where `nome` like '%$texto%'");
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
                echo  "<td>$perfil[cpf]</td>";
                echo  "<td>";
                echo  "<span class=status>$perfil[status]</span>";
                echo "</td>";
                echo  "<td>";
                echo  "<a href=./formularios/alterar-status.php?cod=$perfil[cod]><i class='uil uil-edit'></i></a>";
                echo  "<a href=javascript:confirmar($perfil[cod])><i class='uil uil-trash-alt'></i></a>";
                echo "</td>";
            }
            echo  "</tr>";
            echo        "</tbody>";
            echo   "</table>";
            echo   "</div>";
        }
?>