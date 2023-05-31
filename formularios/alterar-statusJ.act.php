<?php
session_start();
extract($_POST);
require('connect.php');

    if($_SESSION['login'] == true){
        if(mysqli_query($con, "UPDATE `tb_cliente_juridico` SET `status` = '$status'  WHERE `tb_cliente_juridico`.`cod`= '$cod''")){
            $msg = "Alterado com sucesso";
          }else{
            $msg = "Erro na alteração";
          }
    }
else{
   header("location:alterarJ-status.php");   
}
header("location:../clienteJ.php");
