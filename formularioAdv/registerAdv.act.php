<?php
 extract($_POST);
 $senha = md5($senha);
 extract($_FILES);
 require('connect.php');

if(mysqli_query($con,"INSERT INTO `cadastro_login_adv` (`cod`, `nome`, `cpf_adv`, `email`, `celular`, `data_nascimento`, `senha`, `genero`) 
VALUES (NULL, '$nome', '$cpf_adv', '$email', '$celular', '$data_nascimento', '$senha', '$genero');")){
    $msg = "<p class=sucesso>Registro criado com sucesso!</p>";
    } else{
    $msg = "<p class=erro>Errou, tente novamente!</p>";
    }
     session_start();
          $_SESSION['msg']=$msg;
          
header("location:registerAdv.php");
