<link rel="stylesheet" href="css/admin.css">
<?php
    @session_start();

    $texto = $_GET['texto'];

    require('connect.php');
    if(!$texto == ""){
        $perfis = mysqli_query($con, "SELECT * FROM `cadastro_login_cliente`  where `nome` like '%$texto%'");
        
        if (mysqli_num_rows($perfis) == 0) {
            echo "<p id=no-file>nenhum arquivo encontrado</p>";
        } else {
            echo "<table width=100%>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>#</th>";
            echo "<th></span>CLIENTE</th>";
            echo "<th></span>CPF</th>";
            echo "<th></span>STATUS</th>";
            echo "<th></span>DADOS</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while ($perfil = mysqli_fetch_array($perfis)) {
                echo "<tr>";
                echo "<td class=cod>$perfil[cod]</td>";
                echo "<td>";
                echo "<div class=client>";
                echo "<div class=client-info>";
                echo "<h4>$perfil[nome]</h4>";
                echo "<small>$perfil[email]</small>";
                echo "</div>";
                echo "</div>";
                echo "</td>";
                echo "<td>$perfil[cpf]</td>";
                echo "<td>";
                echo "<span class=status>$perfil[status]</span>";
                echo "</td>";
                echo "<td>";
                echo "<div id=icones>";
                echo "<a href=./formularios/alterar-status.php?cod=$perfil[cod]><i class='uil uil-edit'></i></a>";
                echo "<a href=javascript:confirmar($perfil[cod])><i class='uil uil-trash-alt'></i></a>";
                echo "</div>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
        }
    }
?>
