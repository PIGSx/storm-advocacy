<?php
 extract($_POST);
 $senha = md5($senha);
 extract($_FILES);
 require('connect.php');
 $img = "../formularios/imgsperfil/".md5(time()).".jpg";
 move_uploaded_file($foto['tmp_name'],$img);


if(mysqli_query($con,"INSERT INTO `cadastro_login_cliente` (`cod`, `nome`, `email`, `celular`, `endereco`, `cidade`, `senha`, `cpf`, `foto`) 
VALUES (NULL, '$nome', '$email', '$celular', '$endereco', '$cidade', '$senha', '$cpf', '$img');")){
    $msg = "<p class=sucesso>Registro criado com sucesso!</p>";
    } else{
    $msg = "<p class=erro>Errou, tente novamente!</p>";
    }
     session_start();
          $_SESSION['msg']=$msg;
          
header("location:register.php");