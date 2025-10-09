<h3>Exercício 5 selecionado:</h3>

<form action="index.php?exe=exercicio-05" method="post">
  <p>Informe um número N maior que 0:</p>
  <label for="numero">Número:</label>
  <input id="numero" type="number" name="numero" min="1" required>
  <br><br>
  <button type="submit">Calcular</button>
</form>

<?php
if ($_POST) {
  $numero = $_POST["numero"];
  $soma = 0;

  for ($i = 1; $i <= $numero; $i++) {
    $soma += $i; 
  }

  echo "<p>Resultado da soma dos números de 1 até N: $soma</p>";
}
?>