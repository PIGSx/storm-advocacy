<?php
session_start();
extract($_POST);
require('connect.php');

    if($_SESSION['login'] == true){
        if(mysqli_query($con, "UPDATE `cadastro_login_cliente` SET `status` = '$status'  WHERE `cadastro_login_cliente`.`cod`= '$cod'")){
            $msg = "Alterado com sucesso";
         // Definir a classe CSS com base no valor do campo "status"
    $msgClass = "";
    if ($status == "ativo") {
      $msgClass = "success";
    } elseif ($status == "inativo") {
      $msgClass = "danger";
    } elseif ($status == "ausente") {
      $msgClass = "warning";
    }
  } else {
    $msg = "Erro na alteração";
    $msgClass = "danger";
  }
    }
else{
   header("location:alterar-status.php");   
}
header("location:../admin-dash.php");
