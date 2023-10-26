<?php

include("./protect.php");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Juros simples</title>
    <link rel="icon" href="./../assents/logo1.png" type="image/png">
    <script src="script_juros_simples.js" defer></script>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .main-login {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .left-login {
            background-color: #008CBA;
            flex: 1;
            text-align: center;
            padding: 20px;
        }

        .left-login .hq {
            color: white;
            font-size: 24px;
        }

        .left-login-image {
            max-width: 100%;
        }

        .right-login {
            flex: 1;
            text-align: center;
        }

        .card-login {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        .name-class {
            font-size: 24px;
            color: #008CBA;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .textfield {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="number"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        .button {
            background-color: #008CBA;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
        }

        .button:hover {
            background-color: #005F7E;
        }

        .pjurosresul {
            font-weight: bold;
            font-size: 18px;
        }
    </style>

</head>

<body>
    <div class="main-login">
        <div class="left-login">
            <a href="index.php" class="logoanima">
                <img src="./../assents/logo1.png" height="200px"></img>

            </a>
            <h1 class="hq" id="hq"> Faça sua contabilidade</h1>


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