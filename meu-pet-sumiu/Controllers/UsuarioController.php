<?php

require_once "Models/Conexao.php";
require_once "Models/UsuarioDAO.php";
require_once "Models/Usuarios.php";

class UsuarioController {
  public function login() {
    
    // require views formulário
    if ($_POST) {
      // verificar os dados
      // verificar no banco de dados se existe esse usuário
    }
  }

  public function inserir() {
    $msg = array("", "", "", "");
    $erro = false;

    if ($_POST) {
      if (empty($_POST["nome"])) {
        $msg[0] = "O campo nome é obrigatório.";
        $erro = true;
      }

      if (empty($_POST["email"])) {
        $msg[1] = "O campo email é obrigatório.";
        $erro = true;
      }
      else {
        // verificar se já não tem um usuário com esse email cadastrado
        $usuario = new Usuarios(email: $_POST["email"]);
        $usuarioDAO = new UsuarioDAO();
        $retorno = $usuarioDAO->valida_email($usuario);

        if (is_array($retorno)) {
          if (count($retorno) > 0) {
            $msg[1] = "Esse email já está cadastrado!";
            $erro = true;
          }
        }
      }

      if (empty($_POST["senha"])) {
        $msg[2] = "O campo senha é obrigatório.";
        $erro = true;
      }

      if (empty($_POST["telefone"])) {
        $msg[3] = "O campo telefone é obrigatório.";
        $erro = true;
      }

      if (!$erro) {
        $usuario = new Usuarios(0, $_POST["nome"], $_POST["email"], password_hash($_POST["senha"], PASSWORD_DEFAULT), $_POST["telefone"]);
        // cadastrar no banco de dados
        $usuarioDAO = new UsuarioDAO();
        $retorno = $usuarioDAO->inserir($usuario);
      }
    }

    require_once "Views/form-usuario.php";
  }
}

?>