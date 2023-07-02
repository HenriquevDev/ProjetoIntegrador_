<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Papelaria Novo Mundo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
  </head>
<body>
  
<form class="formulario form-control w-50 position-absolute top-50 start-50 translate-middle">
  <h1 class="text-center mb-5" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Cadastro</h1>
  <div>
    <label  class="form-label fw-bold">Nome</label>
    <input type="emial" class="form-control" placeholder="papelaria@gmail.com">
  </div>
  <div>
    <label  class="form-label fw-bold">Email</label>
    <input type="emial" class="form-control" placeholder="papelaria@gmail.com">
  </div>
  <div>
    <label  class="form-label fw-bold">Senha</label>
    <input type="password" class="form-control" placeholder="*********">
  </div>
  <div>
    <label  class="form-label fw-bold">CEP</label>
    <input type="number" class="form-control" placeholder="00000-000" maxlength="8">
  </div>

  <div>
    <a  class="link" href="../paginalogin/login.php">Já tem uma conta?</a> <br>
  </div>
  
  <div class=" mt-3 text-center">
    <button type="submit">Entrar</button>
  </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>