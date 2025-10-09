<h3>Exercício 6 selecionado:</h3>

<form action="index.php?exe=exercicio-06" method="post">
  <p>Média com vetor:</p>
  <label for="n1">Número 1:</label>
  <input id="n1" type="number" name="n1" required>
  <br><br>
  <label for="n2">Número 2:</label>
  <input id="n2" type="number" name="n2" required>
  <br><br>
  <label for="n3">Número 3:</label>
  <input id="n3" type="number" name="n3" required>
  <br><br>
  <label for="n4">Número 4:</label>
  <input id="n4" type="number" name="n4" required>
  <br><br>
  <label for="n5">Número 5:</label>
  <input id="n5" type="number" name="n5" required>
  <br><br>
  <button type="submit">Calcular</button>
</form>

<?php
if ($_POST) {
  $numeros = [$_POST["n1"], $_POST["n2"], $_POST["n3"], $_POST["n4"], $_POST["n5"]];
  $soma = 0;
  $media = 0;

  foreach($numeros as $numero) {
    $soma += $numero;
  }
  $media = $soma / sizeof($numeros);

  echo "<p>Resultado: $media</p>";
}
?>