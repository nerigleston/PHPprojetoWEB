<?php
include("./../conexao.php");

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

        header("Location: ./../painel/painel.php");
      }
    } else {
      echo '<script>alert("Nome de usuário ou(e) senha incorreta");</script>';
    }
  }
}
?>


<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="icon" href="./../assents/logo1.png" type="image/png">
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
      padding: 6px;
      margin: 10px 0;
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
    <img src="../assents/logo1.png" height="200px"></img>
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