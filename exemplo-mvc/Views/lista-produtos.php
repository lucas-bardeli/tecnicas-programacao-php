<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Produtos</title>
</head>
<body>
  <h1>Produtos</h1>
  <a href="index.php?controle=ProdutoController&metodo=inserir">Novo Produto</a>

  <table border="1">
    <tr>
      <th style="padding: 5px;">Produto</th>
      <th style='padding: 5px;'>Preço</th>
      <th style='padding: 5px;'>Estoque</th>
      <th style='padding: 5px;'>Ações</th>
    </tr>

    <!-- <?php
      foreach ($resultado as $dados) {
        $preco = number_format($dados->preco, 2, ",", ".");
        echo "<tr>
                <td style='padding: 5px;'>{$dados->nome}</td>
                <td style='padding: 5px;'>{$preco}</td>
                <td style='padding: 5px;'>{$dados->estoque}</td>
                <td style='padding: 5px;'>
                  <a href='index.php?controle=ProdutoController&metodo=alterar&id={$dados->id_produto}'>Alterar</a> &nbsp;
                  <a href='index.php?controle=ProdutoController&metodo=excluir&id={$dados->id_produto}'>Excluir</a>
                </td>
              </tr>";
      }
    ?> -->

    <?php foreach ($resultado as $dados): ?>
      <tr>
        <td style='padding: 5px;'><?= $dados->nome ?></td>
        <td style='padding: 5px;'><?= $dados->preco ?></td>
        <td style='padding: 5px;'><?= $dados->estoque ?></td>
        <td style='padding: 5px;'>
          <a href='index.php?controle=ProdutoController&metodo=alterar&id={$dados->id_produto}'>Alterar</a> &nbsp;
          <a href='index.php?controle=ProdutoController&metodo=excluir&id={$dados->id_produto}'>Excluir</a>
        </td>
      </tr>
    <?php endforeach ?>
  </table>

</body>
</html>