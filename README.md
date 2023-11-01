# PHPprojetoWEB

## Projeto de Login e Senha em PHP com MySQL:

Este é um projeto em desenvolvimento para a criação de um sistema de login e senha em PHP, utilizando um banco de dados MySQL. O objetivo deste projeto é criar um sistema de autenticação seguro para permitir que os usuários acessem recursos protegidos.

Que você pode calcular os juros simples ou compostos.

## Características

- Cálculo para juros simples e compostos
- Banco de dados MySQL

## Software usado

- Xampp
  --MySQL Database - [PHP](http://localhost/phpmyadmin/)
  --Apache Web Server - (http://localhost)

## Banco de dados:

### Cria o schema com o nome "phpteste"

CREATE SCHEMA phpteste;

### Muda para o schema "phpteste"

USE phpteste;

### Estrutura da tabela

`usuario`
CREATE TABLE `usuario` (
  `nome` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`nome`) -- Define a coluna `nome` como chave primária
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

### Extraindo dados da tabela `usuario`
### Inserindo um registro na tabela `usuario` com nome e senha
INSERT INTO `usuario` (`nome`, `password`) VALUES
('seu nome', 'sua senha');