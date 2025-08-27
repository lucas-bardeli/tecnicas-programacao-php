<?php

if ($_GET) {
  echo "{$_GET['nome']} <br> {$_GET['idade']}";
}
else {
  // Redireciona para a página index.html
  header("location:index.html");
}

// $_POST não vai deixar exibido na url

?>