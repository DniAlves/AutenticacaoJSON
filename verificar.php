<?php
include('resultado.php');

function autenticarUsuario($login, $senha) {
  // Lê os usuários do arquivo users.txt
  $usuarios = file_get_contents('users.txt');
  $usuarios = json_decode($usuarios, true);

  // Procura o usuário com o login e senha fornecidos
  foreach ($usuarios as $usuario) {
    if ($usuario['login'] === $login && $usuario['senha'] === $senha) {
      return $usuario['papel'];
    }
  }

  // Retorna false se o usuário não for encontrado
  return false;

}

?>
