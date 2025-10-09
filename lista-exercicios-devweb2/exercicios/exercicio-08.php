<h3>Exercício 8 selecionado:</h3>

<form action="index.php?exe=exercicio-08" method="post">
  <p>Fatorial de um número N:</p>
  <label for="numero">Número:</label>
  <input id="numero" type="number" name="numero" min="1" required>
  <br><br>
  <button type="submit">Calcular</button>
</form>

<?php
if ($_POST) {
  $numero = $_POST["numero"];
  
  function calcular_fatorial($n) {
    $fatorial = 1;
    for ($i = 1; $i <= $n; $i++) {
      $fatorial *= $i;
    }
    return $fatorial;
  }

  echo "<p>O fatorial de $numero é " . calcular_fatorial($numero) . "</p>";
}
?>