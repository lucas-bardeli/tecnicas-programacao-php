<h3>Exercício 4 selecionado:</h3>

<form action="index.php?exe=exercicio-04" method="post">
  <p>Aluno:</p>
  <label for="nota">Nota:</label>
  <input id="nota" type="number" name="nota" min="0" max="10" required>
  <br><br>
  <label for="porcentagem">Porcentagem de presença:</label>
  <input id="porcentagem" type="number" name="porcentagem" min="0" max="100" required>
  <br><br>
  <button type="submit">Verificar</button>
</form>

<?php
if ($_POST) {
  $nota = $_POST["nota"];
  $porcentagem = $_POST["porcentagem"];
  $msg = "";

  if ($porcentagem < 75) {
    $msg = "O aluno está reprovado por falta!";
  }
  else if ($nota > 6) {
    $msg = "O aluno está aprovado!";
  }
  else if ($nota >= 4 && $nota < 6) {
    $msg = "O aluno está de recuperação!";
  }
  else {
    $msg = "O aluno está reprovado!";
  }

  echo "<p>$msg</p>";
}
?>