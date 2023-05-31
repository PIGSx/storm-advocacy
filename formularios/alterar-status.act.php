<?php
session_start();
extract($_POST);
require('connect.php');

    if($_SESSION['login'] == true){
        if(mysqli_query($con, "UPDATE `cadastro_login_cliente` SET `status` = '$status'  WHERE `cadastro_login_cliente`.`cod`= '$cod'")){
            $msg = "Alterado com sucesso";
          }else{
            $msg = "Erro na alteração";
          }
    }
else{
   header("location:alterar-status.php");   
}
header("location:../admin-dash.php");
