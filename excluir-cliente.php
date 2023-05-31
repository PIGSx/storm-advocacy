<?php
    require('connect.php');
    $cod = $_GET['cod'];
    if(mysqli_query($con, "DELETE FROM `cadastro_login_cliente` WHERE `cadastro_login_cliente`.`cod`= $cod")){
        $msg = "<p class = sucesso>Excluido com sucesso!</p>";
    }else{
        $msg = "<p class = erro>Erro ao excluir!</p>";
    }

    @session_start();
    $_SESSION['msg'] = $msg;

    header("location: admin-dash.php");
?>