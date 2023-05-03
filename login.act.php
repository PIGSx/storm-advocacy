<?php

@session_start();

require('connect.php');

extract($_POST);
$senha = md5($senha);

@session_start();
$busca = mysqli_query($con, "Select * from `cadastro_login_cliente` where `email` = '$email'");
$busca1 = mysqli_query($con, "Select * from `cadastro_login_adv` where `email` = '$email'");

    if($busca->num_rows == 1){
        $contato = mysqli_fetch_array($busca);
        if($senha === $login['senha']){
            $_SESSION['login'] = true;
            $_SESSION['nome'] = $contato['nome'];
            $_SESSION['email'] = $contato['email'];
            $target = "location:../index.php";
        }else{
            $target = "location:login.php";
            $msg = "Email ou senha invalidos";
        }
    }else if($busca1->num_rows == 1){
        $login = mysqli_fetch_array($busca2);
        if($senha === $login['senha']){
            $_SESSION['login'] = true;
            $_SESSION['nome'] = $contato['nome'];
            $_SESSION['email'] = $contato['email'];
            $target = "location:../index.php";
        }else{
            $target = "location:login.php";
            $msg = "Email ou senha invalidos";
        }
    }else{
        $target = "location:login.php";
        $msg = "Email ou senha invalidos";
    }
    $_SESSION['msg'] = $msg;
    header($target);
?>
