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
    $admins = mysqli_query($con, "SELECT * FROM `tb_advogado` WHERE `tb_advogado`.`cod` = '$_SESSION[cod]'");
    $admin = mysqli_fetch_array($admins);
    ?>

    <div class="container col-11 col-md-9 mt-4" id="form-container">
        <div class="row gx-5">
            <div class="col-md-6">
                <h2>ADVOGADO</h2>
                <form action="alterar-adv.act.php" method="post">
                    <div class="form-floating mb-3">
                        <p><input type="text" class="form-control" name="nome" placeholder="Digite seu nome" value="<?php echo $admin['nome']?>"></p>
                    </div>
                    <div class="form-floating mb-3">
                        <p><input type="text" class="form-control" name="email" placeholder="Digite seu email" value="<?php echo $admin['email']?>"></p>
                    </div>
                    <div class="form-floating mb-3">
                        <p><input type="number" class="form-control" name="celular" placeholder="Digite seu celular" value="<?php echo $admin['celular']?>"></p>
                    </div>
                    <div class="form-floating mb-3">
                        <p><input type="date" class="form-control" id="last-name" name="data" placeholder="digite sua data de nascimento" value="<?php echo $admin['data']?>"></p>
                    </div>
                    <div class="form-floating mb-3">
                        <p><input type="text" class="form-control" name="cpf" placeholder="Digite seu cpf" value="<?php echo $admin['cpf']?>"></p>
                    </div>
                    <div class="form-floating mb-3">
                        <p><input type="text" class="form-control" name="genero" placeholder="Digite seu genero" value="<?php echo $admin['genero']?>"></p>
                    </div>
                    <div class="form-floating mb-3">
                        <p><input type="text" class="form-control" name="cargo" placeholder="Digite seu cargo" value="<?php echo $admin['cargo']?>"></p>
                    </div>
                    <div class="form-floating mb-3">
                        <p><input type="text" class="form-control" name="status" placeholder="Status atual" value="<?php echo $admin['status']?>"></p>
                    </div>
                    <div class="form-floating mb-3">
                        <p><input type="password" class="form-control" id="password" name="senha" placeholder="Atualize sua senha" value="<?php echo $admin['senha']?>"></p>
                    </div>
                    <div>

                    </div>
                    <input type="submit" class="btn btn-primary" value="alterar">
                </form>
            </div>
        </div>
    </div>


</body>

</html>