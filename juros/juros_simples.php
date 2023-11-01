<?php
include("./../protect.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Juros simples</title>
    <link rel="stylesheet" type="text/css" href="./../styles/juros_simples.css">
    <link rel="icon" href="./../assets/logo1.png" type="image/png">
    <script src="script_juros_simples.js" defer></script>
</head>

<body>
    <div class="main-login">
        <div class="left-login">
            <a href="./../painel/painel.php" class="logoanima">
                <img src="./../assets/logo1.png" height="200px"></img>
            </a>
            <h1 class="hq" id="hq"> Faça sua contabilidade</h1>
            <a href="./../login/logout.php" ><button>Sair da conta</button></a>
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1 class="name-class"> Juros Simples </h1>
                <div class="textfield">
                    <label for="capital">Seu capital (Seu dinheiro)</label>
                    <input type="number" class="cinza" name="capital" id="capital" placeholder="Seu capital" required>
                </div>
                <div class="textfield">
                    <label for="taxa">Taxa de Juros</label>
                    <input class="cinza" type="number" name="taxa" id="taxa" placeholder="Taxa" required>
                </div>
                <div class="textfield">
                    <label> Meses a pagar</label>
                    <input class="cinza" type="number" name="meses" id="meses" placeholder="Meses a pagar" required>
                    <h1> <span class="bottomtext">Através de suas informações calcularemos por você </span></h1>

                    <div class="actioncard">
                    </div>
                    <input class="button" type="submit" value="Ver" id="btn-login" onclick="vendo()">
                    <label>Seu montante é: </label>
                    <p id="montantemo" class="pjurosresul">R$ 0,00</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>