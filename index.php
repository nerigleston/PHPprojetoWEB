<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            margin-top: 50px;
        }

        .container {
            margin-top: 100px;
        }

        button {
            background-color: white;
            color: black;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin: 10px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
        }

        button:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>

<body>
    <h1>Bem-vindo ao Sistema</h1>
    <div class="container">
        <p>Escolha uma opção:</p>
        <a href="login.php"><button>Acessar Login</button></a>
        <a href="cadastro.php"><button>Cadastrar-se</button></a>
    </div>
</body>

</html>