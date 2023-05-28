<?php
    session_start();                         
    extract($_POST);
    extract($_FILES);
    require('connect.php');

    if($_SESSION['login'] == true && $_SESSION['tipo'] == 1){
        if(mysqli_query($con, "UPDATE `cadastro_login_cliente` SET `nome` = '$nome', `email` = '$email', `celular` = '$celular', `endereco` = '$endereco', `cidade` = '$cidade', `senha` = '$senha', `cpf` = '$cpf'  WHERE `cadastro_login_cliente`.`cod` = '$_SESSION[cod]'")){
            $msg = "Alterado com sucesso";
          }else{
            $msg = "Erro na alteração";
          }
    }else if($_SESSION['login'] == true  && $_SESSION['tipo'] == 2){
        if(mysqli_query($con, "UPDATE `tb_cliente_juridico` SET `nome` = '$nome', `email` = '$email', `celular` = '$celular', `endereco` = '$endereco', `cidade` = '$cidade', `senha` = '$senha', `cnpj` = '$cnpj'  WHERE `tb_cliente_juridico`.`cod` = '$_SESSION[cod]'")){
            $msg = "Alterado com sucesso";
          }else{
            $msg = "Erro na alteração";
          }
    }
else{
   header("location:alterar-cliente.php");   
}
header("location:../perfil.php");
