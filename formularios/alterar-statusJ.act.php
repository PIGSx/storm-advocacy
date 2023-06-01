<?php
session_start();
extract($_POST);
require('connect.php');

    if($_SESSION['login'] == true){
        if(mysqli_query($con, "UPDATE `tb_cliente_juridico` SET `status` = '$status'  WHERE `tb_cliente_juridico`.`cod`= '$cod'")){
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
   header("location:alterarJ-status.php");   
}
header("location:../clienteJ.php");
