<?php

$nome = "Lucas Bardeli";
$idade = 19;
$altura = 1.85;
$solteiro = true;

echo "<h1 style='color: blue;'>Olá, $nome!\n</h1><br>";
echo "Idade: $idade\n<br>";
echo "Altura: $altura\n<br>";

if ($solteiro) {
  echo "Estado civil: Solteiro";
}
else {
  echo "Estado civil: Compromissado";
}

?>