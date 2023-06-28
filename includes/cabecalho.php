<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Papelaria Novo Mundo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg cabecalho">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="../index.php"><img src="img/icone.png" class="mb-1" alt="Icone" width="50">Papelaria Novo Mundo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item  " >
            <h5 ><a class="nav-link home" aria-current="page" href="../projetointegrador/index.php">Home</a></h5>
          </li>
          <li class="nav-item">
            <h5> <a class="nav-link dest" href="#">Destaques</a></h5>
          </li>
          <li class="nav-item">
            <h5><a class="nav-link prod" href="#">Produtos</a></h5>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-danger bg-danger-subtle " type="submit"><img class="mb-1" src="img/lupa.png" width="15" alt=""></button>
        </form>
       <a href="paginalogin/login.php"> <button class="btn btn-outline-primary ms-2">Login</button></a>
        <a href="#"><button class="btn btn-outline-primary ms-2">Registrar</button></a>

      </div>
    </div>
  </nav>