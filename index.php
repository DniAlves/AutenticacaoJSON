<!DOCTYPE html>
<html>
<head>
  <link href="/css/style.css" rel="stylesheet">
  <title>Login</title>
</head>
<body>
  <section class="content">
    <div class="bloco1">
      <h1>Acesso</h1>
      <div class="dados">
        <?php
          $json = file_get_contents('users.txt');
          $usuarios = json_decode($json);

          echo "<table>";
          echo "<tr><th>Login</th><th>Senha</th></tr>";

          foreach ($usuarios as $usuario) {
            echo "<tr>";
            echo "<td onclick=\"preencherCampos('" . $usuario->login . "', '" . $usuario->senha . "')\">" . $usuario->login . "</td>";
            echo "<td onclick=\"preencherCampos('" . $usuario->login . "', '" . $usuario->senha . "')\">" . $usuario->senha . "</td>";
            echo "</tr>";
          }

          echo "</table>";
        ?>
      </div>
    </div>
    <form class="bloco2" action="auten.php" method="post">
      <h1>LOGIN</h1>
      <div>
        <label for="login">Login:</label>
        <input type="text" id="login" name="login">
      </div>
      <div>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha">
      </div>
      <div>
        <button type="submit">Entrar</button>
      </div>
    </form>
  </section>
  <script src="js/script.js"></script>
</body>
</html>