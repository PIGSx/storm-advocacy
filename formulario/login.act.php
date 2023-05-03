<?php
extract($_POST);
var_dump($_POST);
$senha = md5($senha);
require('connect.php');
@session_start();
$busca = mysqli_query($con, "Select * from `cadastro_login_cliente` where `email` = '$email'");
var_dump($busca);
    $msg = "";
    if($busca -> num_rows == 1){
    //caso 1 email encontrado
    $contato =  mysqli_fetch_array($busca);
    if($senha === $contato ['senha']){
        //caso senha correta
        $_SESSION['login'] = true;
        $_SESSION['nome'] = $contato['nome'];
        $_SESSION['email'] = $contato['email'];
        $target = "location:../index.php";
        
    }else{
        //caso a senha esteja incorreta 
        $target = "location:login.php";
        $msg = "Email ou senha inválido";
    }
}else{
        //caso o email nao exista
        $target = "location:login.php";
        $msg = "Email ou senha inválido";
    }
$_SESSION['msg'] = $msg;
header($target);
?>