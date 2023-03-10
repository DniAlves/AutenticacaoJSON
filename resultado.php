<?php
// Obtém os dados do formulário
$login = $_POST['login'];
$senha = $_POST['senha'];

// Autentica o usuário
$papel = autenticarUsuario($login, $senha);

// Verifica se o usuário está autenticado
if ($papel) {
  // Redireciona o usuário para a página de sucesso
  header('Location: sucesso.php');
} else {
  // Redireciona o usuário para a página de erro
  header('Location: erro.php');
}

?>
