<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="/css/style.css" rel="stylesheet">
  <title>Login</title>
</head>
<body>
  <div class="nav"> 
  <a href="index.php" class="link1"><i class="fa fa-arrow-left "></i> Voltar para o início</a>
  </div>
  <div class="content">
    <div class="bloco1"> 
<?php if (isset($_GET['login']) && isset($_GET['cargo'])): ?>
  <h1>Bem-vindo <?php echo $_GET['login']; ?>!</h1>
  <p>Sua autenticação foi bem-sucedida.<br> Você possui acesso  <?php echo $_GET['cargo']; ?>.</p>
<?php else: ?>
  <p>Ocorreu um erro ao processar sua solicitação.</p>
<?php endif; ?>
</div>
  </div>
</body>
</html>