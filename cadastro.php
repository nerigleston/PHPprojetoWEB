<?php

include("conexao.php");

if (isset($_POST["nome"]) && isset($_POST["password"])) {
  $nome = $mysqli->real_escape_string($_POST["nome"]);
  $password = $mysqli->real_escape_string($_POST["password"]);

  // Verifica se o usuário já existe
  $verifica = $mysqli->query("SELECT * FROM login WHERE nome = '$nome'");
  if ($verifica->num_rows == 0) {
    // Insere o novo usuário no banco de dados
    $inserir = $mysqli->query("INSERT INTO login (nome, password) VALUES ('$nome', '$password')");
    if ($inserir) {
      echo "Cadastro realizado com sucesso!";
    } else {
      echo "Erro ao cadastrar o usuário: " . $mysqli->error;
    }
  } else {
    echo "Nome de usuário já em uso. Escolha outro nome.";
  }
}
?>


<!DOCTYPE html>
<html>

<head>
  <style>
    body {
      background-color: black;
      color: white;
      font-family: Arial, sans-serif;
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 70vh;
      margin: 0;
    }

    h1 {
      margin-top: 50px;
    }

    .container {
      margin-top: 20px;
    }

    label {
      display: block;
      margin-top: 10px;
    }

    input[type="text"],
    input[type="password"] {
      padding: 10px;
      margin-top: 5px;
      width: 100%;
      margin-bottom: 5px;
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
  <div class="container">
    <h1>Cadastro</h1>
    <form method="post">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" id="nome" />
      <br />
      <label for="password">Senha:</label>
      <input type="password" name="password" id="password" />
      <br />
      <button type="submit">Cadastrar</button>
    </form>
  </div>
</body>

</html>
