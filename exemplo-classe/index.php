<?php

// include "Usuario.php";
// Se não encontrar o arquivo gera um Warning e continua executando. Inclui mais de uma vez.

// include_once "Usuario.php";
// Inclui apenas uma vez.

// require "Usuario.php";
// Se não encontrar o arquivo gera um Fatal error e para a execução. Inclui mais de uma vez.

require_once "Usuario.php";
// Inclui apenas uma vez.

// criando um objeto
$usuario1 = new Usuario("Maria", "maria@gmail.com", "m1234");
$usuario2 = new Usuario("", "maria@gmail.com", "m1234");
$usuario3 = new Usuario(senha: "m1234", email: "maria@gmail.com");

echo "<pre>";
var_dump($usuario1);
echo "<br>";
var_dump($usuario2);
echo "<br>";
var_dump($usuario3);
echo "</pre>";

echo "<h1>Olá, {$usuario1->getNome()}</h1>";
echo "<h2>Email: {$usuario1->getEmail()}</h2>";
echo "<h2>Senha: {$usuario1->getSenha()}</h2>";

$usuario1->setNome("Maria da Silva");
echo "<h1>Olá, {$usuario1->getNome()}</h1>";

?>