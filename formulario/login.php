<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
    <title>Login</title>
</head>
<body>
    <div class="container col-11 col-md-9" id="form-container"  >
        <div class="row align-items-center gx-5">
            <div class="col-md-6 order-md-2">
                <h2>Faça seu login</h2>
                <form method="post" action="login.act.php">

                  
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Digite seu e-mail"> 
                        <label for="email" class="form-label">Digite seu e-mail</label>
                    </div>
                    <br>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="senha" placeholder="Digite sua senha"> 
                        <label for="password" class="form-label">digite sua senha</label>
                    </div>
                    <br>
                    <div class="form-floating mb-3">
                        <input type="submit" class="btn btn-primary" value="Entrar">
                    </div>
                </form>
            </div>
            <!--div da imagem-->
            <div class="col-md-6 order-md-1">
                <div class="col-12">
                    <img src="img/storm (roxo).png" class="img-fluid"> 
                    <div class="col-12" id="link-container">
                        <a href="register.php">Ainda não tenho cadastro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    } 
    ?>

</body>
</html>