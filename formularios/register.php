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
    session_start();
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

    <div class="container col-11 col-md-9 mt-4" id="form-container">
        <div class="row gx-5">
            <div class="col-md-6">
                <h2>Faça seu cadastro</h2>
                <form method="post" action="register.act.php">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" name="nome" placeholder="Digite seu nome">
                        <label for="name" class="form-label">Digite seu nome completo</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="last-name" name="email" placeholder="Digite seu sobrenome">
                        <label for="last-name" class="form-label">Digite seu e-mail</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="last-name" name="celular" placeholder="Digite seu email">
                        <label for="celular" class="form-label">Digite o número do seu celular</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="last-name" name="endereco" placeholder="Digite sua senha">
                        <label for="endereco" class="form-label">Digite seu endereço<label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="last-name" name="cpf" placeholder="Digite sua senha">
                        <label for="endereco" class="form-label">Digite seu Cpf<label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="last-name" name="cidade" placeholder="Confirme sua senha">
                        <label for="cidade" class="form-label">Digite sua cidade<label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="senha" placeholder="Crie sua senha">
                        <label for="senha" class="form-label">Crie sua senha<label>
                    </div>
                    <label for="file-input" class="drop-container">
                        <span class="drop-title">Adicione sua foto de perfil</span>
                        ou
                        <input type="file" accept="image/*" required="" id="file-input" name="foto">
                    </label>
                </form>
                <input type="submit" class="btn btn-primary" value="cadastrar">
                </form>
            </div>
            <div class="col-6 mt-4">
                <div class="row align-items-center">
                    <div class="col-12">
                        <img src="../img/atuacoes/png/sa-red.PNG" class="img-fluid">
                    </div>
                    <div class="col-12" id="link-container">
                        <a href="login.php">Eu já tenho uma conta</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>