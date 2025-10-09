<h3>Exercício 7 selecionado:</h3>

<form action="index.php?exe=exercicio-07" method="post">
  <p>Média com matriz:</p>
  <p>Aluno 1:</p>
  <label for="n1a1">Nota 1:</label>
  <input id="n1a1" type="number" name="n1a1" min="0" max="10" required>
  &nbsp;
  <label for="n2a1">Nota 2:</label>
  <input id="n2a1" type="number" name="n2a1" min="0" max="10" required>
  
  <p>Aluno 2:</p>
  <label for="n1a2">Nota 1:</label>
  <input id="n1a2" type="number" name="n1a2" min="0" max="10" required>
  &nbsp;
  <label for="n2a2">Nota 2:</label>
  <input id="n2a2" type="number" name="n2a2" min="0" max="10" required>
  
  <p>Aluno 3:</p>
  <label for="n1a3">Nota 1:</label>
  <input id="n1a3" type="number" name="n1a3" min="0" max="10" required>
  &nbsp;
  <label for="n2a3">Nota 2:</label>
  <input id="n2a3" type="number" name="n2a3" min="0" max="10" required>
  <br><br>
  
  <button type="submit">Calcular</button>
</form>

<?php
if ($_POST) {
  $notas = [
    [$_POST["n1a1"], $_POST["n2a1"]],
    [$_POST["n1a2"], $_POST["n2a2"]],
    [$_POST["n1a3"], $_POST["n2a3"]]
  ];

  foreach ($notas as $indice => $notasAluno) {
    $media = array_sum($notasAluno) / count($notasAluno);
    echo "<p>Aluno " . ($indice + 1) . " - Média: " . number_format($media, 2) . "</p>";
  }
}
?>