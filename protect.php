<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inválida</title>
    <link rel="stylesheet" type="text/css" href="./../styles/protect.css">
    <link rel="icon" href="./../assets/logo1.png" type="image/png">

</head>

<body>
    <div class="cont">
        <?php

        if (!isset($_SESSION)) {
            session_start();
        }

        if (!isset($_SESSION["nome"])) {
            die("Você não pode acessar.<a href = \"./../index.html\"><button>Entrar</button></a>");
        }
        ?>
    </div>
</body>

</html>