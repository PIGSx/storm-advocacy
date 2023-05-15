<?php

@session_start();

require('connect.php');

extract($_FILES);
extract($_POST);
$senha = md5($senha);

$busca1 = mysqli_query($con, "Select * from `cadastro_login_cliente` where `email` = '$email'");
$busca2 = mysqli_query($con, "Select * from `tb_cliente_juridico` where `email` = '$email'");
$busca3 = mysqli_query($con, "Select * from `tb_advogado` where `email` = '$email'");

    if($busca1->num_rows == 1){
        $contato = mysqli_fetch_array($busca1);
        if($senha === $contato['senha']){
            $_SESSION['login'] = true;
            $_SESSION['cod'] = $contato['cod'];
            $_SESSION['nome'] = $contato['nome'];
            $_SESSION['email'] = $contato['email'];
            $target = "location:../index.php";
        }else{
            $target = "location:login.php";
            $msg = "Email ou senha invalidos";
        }
    }else if($busca2->num_rows == 1){
        $login = mysqli_fetch_array($busca2);
        if($senha === $login['senha']){
            $_SESSION['login'] = true;
            $_SESSION['cod'] = $contato['cod'];
            $_SESSION['nome'] = $login['nome'];
            $_SESSION['email'] = $login['email'];
            $target = "location:../index.php";
        }else{
            $target = "location:login.php";
            $msg = "Email ou senha invalidos";
        }
    }else if($busca3->num_rows == 1){
        $login = mysqli_fetch_array($busca3);
        if($senha === $login['senha']){
            $_SESSION['login'] = true;
            $_SESSION['cod'] = $contato['cod'];
            $_SESSION['nome'] = $login['nome'];
            $_SESSION['email'] = $login['email'];
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
