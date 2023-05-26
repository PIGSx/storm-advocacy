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
  if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }
  ?>

    <div class="container col-11 col-md-9 mt-4" id="form-container">
        <div class="row gx-5">
            <div class="col-md-6">
                <h2>ADVOGADO</h2>
                <form action="registerAdv.act.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control"  name="nome" placeholder="Digite seu nome">
                        <label for="name" class="form-label">Digite seu nome completo</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control"  name="email" placeholder="Digite seu email">
                        <label for="last-name" class="form-label">Digite seu e-mail</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="celular" placeholder="Digite seu celular">
                        <label for="celular" class="form-label">Digite o número do seu celular</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="last-name" name="data" placeholder="digite sua data de nascimento">
                        <label for="cidade" class="form-label">idade<label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control"  name="cpf" placeholder="Digite seu cpf">
                        <label for="endereco" class="form-label">cpf<label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control"  name="genero" placeholder="Digite seu genero">
                        <label for="genero" class="form-label">genero<label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control"  name="cargo" placeholder="Digite seu cargo">
                        <label for="genero" class="form-label">cargo<label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control"  name="status" placeholder="status atual">
                        <label for="genero" class="form-label">status<label>
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