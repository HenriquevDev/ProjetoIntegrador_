<?php
include "../includes/cabecalho.php";
include "../includes/conexao.php";
?>
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators ">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/material.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/materiais.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/promocao.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bg-dark-subtle" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon bg-dark-subtle" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div id="destaques" class=" container text-center mt-5 ">

  <div class="row justify-content-center">
    <?php
    $sql = "select * from t_produtos";
    $todos_os_produtos = mysqli_query($conexao, $sql);
    while ($um_produto = mysqli_fetch_assoc($todos_os_produtos)) :
    ?>
      <a href="../paginacompra/index.php?id=<?php echo $um_produto['id'];?>" class="col-lg-3 col-md-3 ms-5 text-center mb-4" style="text-decoration: none; color:#141212;">
        <div style="background:#F2C6C2;border-radius:5%; max-height:100%; min-height: 100%;">

          <img style="width:90%; border-radius:10%;" class="mt-3" src="<?php echo $um_produto['imagem']; ?>" alt="Imagem do Produto">

          <div class="col text-start">

            <dt name="nome" class="ms-1 col-sm-5 fs-5 text-wrap col-md-9">
              <?php echo $um_produto['nome']; ?>
            </dt>
            <dd class="ms-1 mb-0 lead">
              Categoria: <?php echo $um_produto['categoria']; ?>
            </dd>
            <dd class="ms-1 mb-0 lead">
              Marca: <?php echo $um_produto['marca']; ?>
            </dd>
            <dt class="preco text-end fs-4 mb-2 me-1">
              R$<?php echo $um_produto['preco']; ?>
            </dt>


          </div>

        </div>
      </a>






    <?php endwhile ?>
  </div>
</div>
<?php
include "../includes/rodape.php";
?>