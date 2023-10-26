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
  <title>Cadastro</title>
  <link rel="icon" href="./../assets/logo1.png" type="image/png">
  <link rel="stylesheet" type="text/css" href="./../styles/cadastro.css">
</head>

<body>
  <div class="container">
    <form method="post">
      <img src="../assets/logo1.png" height="200px"></img>
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