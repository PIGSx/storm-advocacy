<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/menu.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>

<body>
    <?php
    @session_start();
    // @var_dump($_SESSION);
    if (!isset($_SESSION['login'])) {
        $_SESSION['login'] = false;
    }
    if ($_SESSION['login'] === true) {
        echo "<div class=menu>";
        echo "<nav>";
        echo " <div class=container>";
        echo  "<input type=checkbox id=check>";
        echo  "<a href=index.php>";
        echo      "<h3>ADVOCACY</h3>";
        echo  " </a>";
        echo   "<ul class=links>";
        echo      "<li><a class=active href=index.php>início</a></li>";
        echo      "<li><a href=about.php>sobre</a></li>";
        echo      "<li><a href=atuacoes.php>áreas</a></li>";
        echo      "<li><a href=contato.php>contato</a></li>";
        echo  "</ul>";
        echo     "<ul class=icons>";
        echo  "<div class=icons>";
        echo  '<i class="uil uil-moon toggle-btn"></i>';
        echo   '<a href=perfil.php><i class="uil uil-user"></i></a>';
        echo "</div>";
        echo "</ul>";
        echo  "<div class=hamburguer-menu-container>";
        echo     "  <div class=hamburguer-menu>";
        echo            "<div></div>";
        echo        "</div>";
        echo   " </div>";
        echo "</div>";
        echo "</nav>";
        echo "</div>";
    } else {
        echo "<div class=menu>";
        echo "<nav>";
        echo " <div class=container>";
        echo  "<input type=checkbox id=check>";
        echo  "<a href=index.php>";
        echo      "<h3>ADVOCACY</h3>";
        echo  " </a>";
        echo   "<ul class=links>";
        echo      "<li><a class=active href=index.php>início</a></li>";
        echo      "<li><a href=about.php>sobre</a></li>";
        echo      "<li><a href=atuacoes.php>áreas</a></li>";
        echo      "<li><a href=#!>contato</a></li>";
        echo  "</ul>";
        echo     "<ul class=icons>";
        echo  "<div class=icons>";
        echo  '<i class="uil uil-moon toggle-btn"></i>';
        echo "</div>";
        echo "</ul>";
        echo  "<div class=hamburguer-menu-container>";
        echo     "  <div class=hamburguer-menu>";
        echo            "<div></div>";
        echo        "</div>";
        echo   " </div>";
        echo "</div>";
        echo "</nav>";
        echo "</div>";
    }
    ?>
    <script src="js/menu.js"></script>
</body>

</html>