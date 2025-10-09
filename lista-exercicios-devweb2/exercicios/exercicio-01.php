<h3>Exercício 1 selecionado:</h3>

<form action="index.php?exe=exercicio-01" method="post">
  <label for="nome">Nome:</label>
  <input id="nome" type="text" name="nome" required>
  <br><br>
  <label for="idade">Idade:</label>
  <input id="idade" type="number" name="idade" min="1" required>
  <br><br>
  <label for="email">Email:</label>
  <input id="email" type="email" name="email" required>
  <br><br>
  <label for="telefone">Telefone:</label>
  <input id="telefone" type="text" name="telefone" required>
  <br><br>
  <button type="submit">Enviar</button>
</form>

<?php
if ($_POST) {
  $nome = $_POST["nome"];
  $idade = $_POST["idade"];
  $email = $_POST["email"];
  $telefone = $_POST["telefone"];
  echo "<p>$nome tem $idade anos. Seu email: $email e telefone: $telefone</p>";
}
?>