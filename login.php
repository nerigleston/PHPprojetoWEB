<?php
include("conexao.php");

if (isset($_POST["nome"]) || isset($_POST["password"])) {
  if (strlen($_POST["nome"]) == 0) {
    echo "Preencha seu nome";
  } else if (strlen($_POST["password"]) == 0) {
    echo "Preencha sua senha";
  } else {
    $nome = $mysqli->real_escape_string($_POST["nome"]);
    $password = $mysqli->real_escape_string($_POST["password"]);

    $sql_code = "SELECT * from login WHERE nome = '$nome' AND password = '$password'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução" . $mysqli->error);

    $quantidade = $sql_query->num_rows;

    if ($quantidade == 1) {
      $nome = $sql_query->fetch_assoc();

      if (!isset($_SESSION)) {
        session_start();

        $_SESSION["nome"] = $nome;

        header("Location: painel.php");
      }
    } else {
      echo "Falha ao logar";
    }
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
      margin-top: 100px;
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
    <h1>Login</h1>
    <form action="" method="post">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" id="nome" />
      <br />
      <label for="password">Senha:</label>
      <input type="password" name="password" id="password" />
      <br />
      <button type="submit">Login</button>
    </form>
  </div>
</body>

</html>