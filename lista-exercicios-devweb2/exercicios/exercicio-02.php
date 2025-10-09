<h3>Exercício 2 selecionado:</h3>

<form action="index.php?exe=exercicio-02" method="post">
  <label for="n1">Número 1:</label>
  <input id="n1" type="number" name="n1" required>
  <br><br>
  <label for="n2">Número 2:</label>
  <input id="n2" type="number" name="n2" required>
  <br><br>
  <button type="submit" name="operacao" value="soma">Somar</button>
  <button type="submit" name="operacao" value="subtracao">Subtrair</button>
  <button type="submit" name="operacao" value="multiplicacao">Multiplicar</button>
  <button type="submit" name="operacao" value="divisao">Dividir</button>
</form>

<?php
if ($_POST) {
  $n1 = $_POST["n1"];
  $n2 = $_POST["n2"];
  $operacao = $_POST["operacao"];

  switch ($operacao) {
    case "soma":
      $resultado = $n1 + $n2;
      break;
    case "subtracao":
      $resultado = $n1 - $n2;
      break;
    case "multiplicacao":
      $resultado = $n1 * $n2;
      break;
    case "divisao":
      $resultado = $n2 != 0 ? $n1 / $n2 : "Erro: divisão por zero!";
      break;
    default:
      $resultado = "Operação inválida.";
  }

  echo "<p>Resultado: $resultado</p>";
}
?>