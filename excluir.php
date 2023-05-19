<?php
    require('connect.php');

    if(mysqli_query($con, "SELECT * FROM `tb_advogado` WHERE `tb_advogado`.`cod`= '$cod'")){
        $msg = "<p class = sucesso>Excluido com sucesso!</p>";
    }else{
        $msg = "<p class = erro>Erro ao excluir!</p>";
    }

    @session_start();
    $_SESSION['msg'] = $msg;

    header("location: adv-admin.php");
?>