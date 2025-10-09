<h3>Exercício 10 selecionado:</h3>

<form action="index.php?exe=exercicio-10" method="post">
  <p>Informe números (0 para encerrar e mostrar quantidade de pares):</p>
  <label for="numero">Número:</label>
  <input id="numero" type="number" name="numero" required>
  <br><br>
  <button type="submit">Enviar</button>
</form>

<?php
// Usando a sessão para manter os números entre envios
session_start();

if (!isset($_SESSION["pares"])) {
  $_SESSION["pares"] = 0;
}

if ($_POST) {
  $numero = (int)$_POST["numero"];
  
  if ($numero === 0) {
    echo "<p>Quantidade de números pares digitados: " . $_SESSION["pares"] . "</p>";
    $_SESSION["pares"] = 0;
  } else {
    if ($numero % 2 === 0) {
      $_SESSION["pares"]++;
    }
    echo "<p>Número $numero recebido. Digite outro ou 0 para encerrar.</p>";
  }
}
?>