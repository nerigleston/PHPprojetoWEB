<?php
include("./../conexao.php");
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Juros</title>
    <link rel="icon" href="./../assets/logo1.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="./../styles/painel.css">
</head>

<body>
    <div class="container">
        <img src="./../assets/logo1.png" height="200px"></img>
        <h2>Escolha qual deseja calcular</h2>
        <p>Escolha uma opção:</p>
        <a href="./../juros/juros_compostos.php"><button>Juros Compostos</button></a>
        <a href="./../juros/juros_simples.php"><button>Juros Simples</button></a>
    </div>
</body>

</html>