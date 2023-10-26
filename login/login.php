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
  <link rel="icon" href="./../assets/logo1.png" type="image/png">
  <link rel="stylesheet" type="text/css" href="./../styles/login.css">
</head>

<body>
  <div class="container">
    <img src="../assets/logo1.png" height="200px"></img>
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