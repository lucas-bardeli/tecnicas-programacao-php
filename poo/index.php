<?php

// include "Usuario.class.php"; // Se não encontrar o arquivo gera um Warning e continua executando. Inclui mais de uma vez.
// include_once "Usuario.class.php"; // Inclui apenas uma vez.
// require "Usuario.class.php"; // Se não encontrar o arquivo gera um Fatal error e para a execução. Inclui mais de uma vez.
require_once "Usuario.class.php"; // Inclui apenas uma vez.

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

echo "<h1>Olá, $usuario1->nome</h1>";
echo "<h2>$usuario1->email</h2>";
echo "<h2>$usuario1->senha</h2>";

$usuario1->nome = "Maria da Silva";
echo "<h1>Olá, $usuario1->nome</h1>";

?>