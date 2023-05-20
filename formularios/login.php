<?php
@session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
    <!-- alert -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="msg-error">
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
    </div>
    <div class="container col-11 col-md-9" id="form-container">
        <div class="row align-items-center gx-5">
            <div class="col-md-6 order-md-2">
                <h2>Faça seu login</h2>
                <form action="login.act.php" method="post">


                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="email" placeholder="Digite seu e-mail">
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
                    <img src="../img/atuacoes/png/sa-red.PNG" class="img-fluid">
                    <div class="col-12" id="link-container">
                        <a class="cad" onclick="alert()">ainda não tem uma conta??</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function alert() {
            Swal.fire({
                title: 'como você gostaria de se registrar?',
                showDenyButton: true,
                showCloseButton: true,
                confirmButtonText: 'pessoa física',
                denyButtonText: `pessoa jurídica`,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "register.php";
                } else if (result.isDenied) {
                    window.location.href = "registerJ.php";
                }
            })
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
</body>

</html>