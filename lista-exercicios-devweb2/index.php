<?php

$exercicio = isset($_GET["exe"]) ? $_GET["exe"] : "";

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercícios</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div id="menu">
    <?php require_once "exercicios/menu.php"; ?>
  </div>

  <div id="conteudo">
    <?php
      if ($exercicio && file_exists("exercicios/$exercicio.php")) {
        require_once "exercicios/$exercicio.php";
      } else {
        echo "<h2>Exercício não encontrado, escolha um exercício no menu.</h2>";
      }
    ?>
  </div>

</body>
</html>