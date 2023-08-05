<?php
include "../includes/conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Papelaria Novo Mundo</title>
  <link rel="stylesheet" href="login.css">
</head>

<body class="body">
  <div class="page">
    <form method="POST" class="formLogin" class="page">
      <h1>Login</h1>
      <p>Digite os seus dados de acesso no campo abaixo.</p>
      <div>

        <img src="img/login.png" class="loginicon" alt="...">

        <br>

        <label for="email">Email</label>
        <input type="email" placeholder="Digite seu e-mail" autofocus="true" placeholder="papelaria@gmail.com" />
      </div>
      <div>
        <label for="password">Senha</label>
        <input type="password" placeholder="*********">
      </div>

      <div>
        <a class="link" href="../paginacadastro/cadastro.php">ainda não tem uma conta?</a> <br>
        <a class="link mt-2" href="#">esqueceu sua senha?</a>
      </div>


      <a href="../pagina/index.php">
        <div class="button"><span>Entrar</span>
          
      </div>
        
      </a>

    </form>
  </div>

</body>

</html>