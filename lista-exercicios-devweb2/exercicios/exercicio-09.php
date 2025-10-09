<h3>Exercício 9 selecionado:</h3>

<form action="index.php?exe=exercicio-09" method="post">
  <p>Informe um número para exibir seu valor arredondado:</p>
  <label for="numero">Número:</label>
  <input id="numero" type="number" step="any" name="numero" required>
  <br><br>
  <button type="submit">Mostrar</button>
</form>

<?php
if ($_POST) {
  $numero = $_POST["numero"];
  
  $arredondarCima = ceil($numero);
  $arredondarBaixo = floor($numero);

  echo "<p>Arredondado para cima (ceil): $arredondarCima</p>";
  echo "<p>Arredondado para baixo (floor): $arredondarBaixo</p>";
}
?>