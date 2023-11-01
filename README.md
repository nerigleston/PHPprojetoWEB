# PHPprojetoWEB

## Projeto de Login e Senha em PHP com MySQL:

Este é um projeto em desenvolvimento para a criação de um sistema de login e senha em PHP, utilizando um banco de dados MySQL. O objetivo deste projeto é criar um sistema de autenticação seguro para permitir que os usuários acessem recursos protegidos.

Que você pode calcular os juros simples ou compostos.

## Características

- Calculadora para juros simples e compostos
- Banco de dados MySQL

## Software usado

- Xampp (Certifique de ativar o MySQL e o Apache)
  * MySQL Database - (http://localhost/phpmyadmin/) ou (http://localhost:8080/phpmyadmin/)
  * Apache Web Server - (http://localhost) ou (http://localhost:8080)

## Banco de dados:

### Cria o schema com o nome "phpteste"

CREATE SCHEMA phpteste;

### Muda para o schema "phpteste"

USE phpteste;

### Estrutura da tabela

`login`
CREATE TABLE `login` (
  `nome` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`nome`) -- Define a coluna `nome` como chave primária
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

### Extraindo dados da tabela `login`
### Inserindo um registro na tabela `login` com nome e senha
INSERT INTO `login` (`nome`, `password`) VALUES
('seu nome', 'sua senha');