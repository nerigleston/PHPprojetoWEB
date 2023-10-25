<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION["nome"])) {
    die("Você não pode acessar.<p><a href = \"index.php\">Entrar</a></p>");
}
?>


