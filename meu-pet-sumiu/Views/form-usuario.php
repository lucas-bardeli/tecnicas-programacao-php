<?php

require_once "cabecalho.php"

?>
  <div class="content">
    <div class="container">
      <form class="row g-3" action="#" method="post">
        <div class="col-md-6">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="col-md-6">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha" name="senha">
        </div>
        <div class="col-md-6">
          <label for="telefone" class="form-label">Telefone</label>
          <input type="text" class="form-control" id="telefone" name="telefone">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>