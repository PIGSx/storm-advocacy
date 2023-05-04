<?php
 extract($_POST);
 $senha = md5($senha);
 extract($_FILES);
 require('connect.php');

if(mysqli_query($con,"INSERT INTO `tb_advogado` (`cod`, `nome`, `email`, `celular`, `dataNascimento`, `cpf`, `genero`, `senha`) 
VALUES (NULL, '$nome', '$email', '$celular', '$data', '$cpf', '$genero', '$senha');")){
    $msg = "<p class=sucesso>Registro criado com sucesso!</p>";
    } else{
    $msg = "<p class=erro>Errou, tente novamente!</p>";
    }
     session_start();
          $_SESSION['msg']=$msg;
          
header("location:registerAdv.php");
