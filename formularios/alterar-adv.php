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
    $cod = $_GET['cod'];
    require('connect.php');
    $admins = mysqli_query($con, "SELECT * FROM `tb_advogado` WHERE `tb_advogado`.`cod`= '$cod'");
    $admin = mysqli_fetch_array($admins);
    $perfil_status = $admin['status'];
    $perfil_cargo = $admin['cargo'];
    ?>

    <div class="container col-11 col-md-9 mt-4" id="form-container">
        <div class="row gx-5">
            <div class="col-md-6">
                <h2 id="advs">Cargo</h2>
                <form action="alterar-adv.act.php" method="post">
                    <div class="form-floating mb-3">
                        <div class="options">
                            <label>
                                <input type="radio" name="cargo" value="admin" <?php if ($perfil_cargo === "admin") echo "checked"; ?>>
                                <span>ADMIN</span>
                            </label>
                            <label>
                                <input type="radio" name="cargo" value="advogado" <?php if ($perfil_cargo === "advogado") echo "checked"; ?>>
                                <span>ADVOGADO(A)</span>
                            </label>
                        </div>
                    </div>
                    <h2 id="status">Status</h2>
                    <div class="form-floating mb-3">
                        <div class="options">
                            <label>
                                <input type="radio" name="status" value="ativo" <?php if ($perfil_status === "ativo") echo "checked"; ?>>
                                <span>ATIVO</span>
                            </label>
                            <label>
                                <input type="radio" name="status" value="inativo" <?php if ($perfil_status === "inativo") echo "checked"; ?>>
                                <span>INATIVO</span>
                            </label>
                            <label>
                                <input type="radio" name="status" value="ausente" <?php if ($perfil_status === "ausente") echo "checked"; ?>>
                                <span>AUSENTE</span>
                            </label>
                        </div>
                    </div>
                    <input type="hidden" name="cod" value=<?php echo "$cod" ?>>
                    <input type="submit" class="btn btn-primary" value="alterar">
                </form>
            </div>
        </div>
    </div>


</body>

</html>