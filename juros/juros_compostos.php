<?php
include("./../protect.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" type="text/css" href="./../styles/juros_composto.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Juros compostos</title>
    <link rel="icon" href="./../assets/logo1.png" type="image/png">
    <script src="script_juros_compostos.js" defer></script>
</head>

<body>

    <div class="main-login">
        <div class="left-login">
            <a href="./../painel/painel.php" class="logoanima">
                <img src="./../assets/logo1.png" height="200px"></img>
            </a>
            <h1 class="hq" id="hq"> Faça sua contabilidade</h1>
            <a href="./../login/logout.php"><button>Sair da conta</button></a>

        </div>
        <div class="right-login">
            <div class="card-login">
                <h1 class="name-class"> Juros Compostos </h1>
                <div class="textfield">
                    <label for="capital" class="label">Seu capital (Seu dinheiro)</label>
                    <input required type="number" class="cinza" name="capital" id="capital" placeholder="Seu capital">
                </div>
                <div class="textfield">
                    <label class="label">Taxa de Juros</label>
                    <input required class="cinza" type="number" name="taxa" id="taxa" placeholder="Taxa">
                </div>
                <div class="textfield">
                    <label class="label"> Meses a pagar</label>
                    <input required class="cinza" type="number" name="meses" id="meses" placeholder="Meses a pagar">
                    <h1> <span class="bottomtext">Através de suas informações calcularemos por você</span></h1>
                    <div>
                    </div>
                    <input class="button" type="submit" value="Ver" id="btn-login" onclick="vendo()">
<<<<<<< HEAD
=======
                    <label for="">Seu montante é: </label>
>>>>>>> 707f4c8d878e1b3853ba1b2d112544288bb10155
                    <p id="montantemo" class="pjurosresul">R$ 0,00</p>
                </div>
            </div>
        </div>
</body>

</html>