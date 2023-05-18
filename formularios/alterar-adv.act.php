<?php
session_start();
extract($_POST);
extract($_FILES);
require('connect.php');

if ($_SESSION['login'] == true) {
  if (mysqli_query($con, "UPDATE `tb_advogado` SET `nome` = '$nome', `email` = '$email', `celular` = '$celular', `dataNascimento` = '$data', `cpf` = '$cpf', `genero` = '$genero',`cargo` = '$cargo',`status` = '$status', `senha` = '$senha'  WHERE `cadastro_login_cliente`.`cod` = '$_SESSION[cod]'")) {
    $msg = "Alterado com sucesso";
  } else {
    $msg = "Erro na alteração";
  }
} else {
  header("location:alterar-adv.php");
}
header("location:../adv-admin.php");
