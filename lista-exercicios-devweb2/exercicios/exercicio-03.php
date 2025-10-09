<h3>Exercício 3 selecionado:</h3>

<form action="index.php?exe=exercicio-03" method="post">
  <p>Informe a base e a altura do retângulo:</p>
  <label for="base">Base:</label>
  <input id="base" type="number" name="base" min="1" required>
  <br><br>
  <label for="altura">Altura:</label>
  <input id="altura" type="number" name="altura" min="1" required>
  <br><br>
  <button type="submit">Calcular</button>
</form>

<?php
if ($_POST) {
  $base = $_POST["base"];
  $altura = $_POST["altura"];

  $area = $base * $altura;
  $perimetro = 2 * ($base + $altura);
 
  echo "<p>Área: $area. Perímetro: $perimetro</p>";
}
?>