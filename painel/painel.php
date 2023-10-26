<?php
include("./protect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        button {
            background-color: #008CBA;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            margin: 10px;
        }

        button:hover {
            background-color: #005F7E;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="./../assents/logo1.png" height="200px"></img>
        <h2>Escolha qual deseja calcular</h2>
        <p>Escolha uma opção:</p>
        <a href="./../juros/juros_compostos.php"><button>Juros Compostos</button></a>
        <a href="./../juros/juros_simples.php"><button>Juros Simples</button></a>
    </div>
</body>

</html>