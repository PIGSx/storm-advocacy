<?php
session_start();
extract($_POST);
require('connect.php');

if ($_SESSION['login'] == true) {
  if (mysqli_query($con, "UPDATE `tb_advogado` SET `cargo` = '$cargo',`status` = '$status' WHERE `tb_advogado`.`cod`= '$cod'")) {
    $msg = "Alterado com sucesso";
  } else {
    $msg = "Erro na alteração";
  }
} else {
  header("location:alterar-adv.php");
}
header("location:../adv-admin.php");