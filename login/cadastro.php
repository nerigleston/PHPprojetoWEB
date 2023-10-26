<?php

include("./../conexao.php");

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
    echo '<script>alert(Nome de usuário já em uso. Escolha outro nome.);</script>';
  }
}
?>


<!DOCTYPE html>
<html>

<head>
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
      background-color: #fff;
      border-radius: 10px;
      padding: 50px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      text-align: center;
    }

    h1 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    label {
      font-size: 16px;
    }

    input {
      width: 100%;
      padding: 8px;
      margin: 7px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      background-color: #008CBA;
      color: white;
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      cursor: pointer;
      font-size: 16px;
    }

    button:hover {
      background-color: #005F7E;
    }
  </style>
</head>

<body>
  <div class="container">
    <form method="post">
    <img src="../assents/logo1.png" height="200px"></img>
      <h1>Cadastro</h1>
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