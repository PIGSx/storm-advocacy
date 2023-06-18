<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
    <title>registro</title>
</head>

<body>

    <?php
    @session_start();
    require('connect.php');
    if ($_SESSION['login'] == true && $_SESSION['tipo'] == 1) {
        $perfils = mysqli_query($con, "SELECT * FROM `cadastro_login_cliente` WHERE `cadastro_login_cliente`.`cod` = '$_SESSION[cod]'");
    } else if ($_SESSION['login'] == true  && $_SESSION['tipo'] == 2) {
        $perfils = mysqli_query($con, "SELECT * FROM `tb_cliente_juridico` WHERE `tb_cliente_juridico`.`cod`= '$_SESSION[cod]'");
    }
    $perfil = mysqli_fetch_array($perfils);
    ?>

    <div class="container col-11 col-md-9 mt-4" id="form-container">
        <div class="row gx-5">
            <div class="col-md-6">
                <h2 id="dados">Atualize seus dados</h2>
                <form method="post" action="alterar-cliente.act.php">
                    <div class="form-floating mb-3">
                        <p><input type="text" class="form-control" name="nome" placeholder="Digite seu nome" value="<?php echo $perfil['nome'] ?>"></p>
                    </div>
                    <div class="form-floating mb-3">
                        <p><input type="text" class="form-control" name="email" placeholder="Digite seu nome" value="<?php echo $perfil['email'] ?>"></p>
                    </div>
                    <div class="form-floating mb-3">
                        <p><input type="text" class="form-control" name="celular" placeholder="Digite seu número" value="<?php echo $perfil['celular'] ?>"></p>
                    </div>
                    <div class="form-floating mb-3">
                        <p><input type="text" class="form-control" name="endereco" placeholder="Digite seu endereço" value="<?php echo $perfil['endereco'] ?>"></p>
                    </div>
                    <div class="form-floating mb-3">
                        <?php
                        if ($_SESSION['login'] == true && $_SESSION['tipo'] == 1) {
                            echo       "<p><input type=text class=form-control name=cpf placeholder=Digite seu cpf value=$perfil[cpf]></p>";
                        } else {
                            echo       "<p><input type=text class=form-control name=cpf placeholder=Digite seu cnpj value=$perfil[cnpj]></p>";
                        }
                        ?>
                    </div>
                    <div class="form-floating mb-3">
                        <p><input type="text" class="form-control" name="cidade" placeholder="Digite sua cidade" value="<?php echo $perfil['cidade'] ?>"></p>
                    </div>
                    <div class="form-floating mb-3">
                        <p><input type="text" class="form-control" name="senha" placeholder="Digite sua senha" value="<?php echo $perfil['senha'] ?>"></p>
                    </div>
                    <input type="hidden" name="cod" value=<?php echo "$perfil[cod]"?>>
                    <input type="submit" class="btn btn-primary" value="alterar">
                </form>
            </div>
        </div>
    </div>


</body>

</html>