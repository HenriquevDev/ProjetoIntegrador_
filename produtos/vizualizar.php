<?php
include "../includes/cabecalho.php";
include "../includes/conexao.php";

$id = $_GET["id"];


$descricao = "";
$sql = "select * from t_produtos where id= $id";
$todos_os_produtos = mysqli_query($conexao, $sql);
while ($um_produto = mysqli_fetch_assoc($todos_os_produtos)) :

    $imagem = $um_produto["imagem"];
    $nome = $um_produto["nome"];
    $descricao = $um_produto["descricao"];
    $categoria = $um_produto["categoria"];
    $marca = $um_produto["marca"];
    $preco = $um_produto["preco"];

endwhile;
?>
<center>
    
<h1 >Ficha do Produto <?php echo $id?></h1>
</center>

<div class="container">
    <div class="row me-0">
        <div class="col-4 mt-3 mb-4">
            <a href="selecionar.php">
                <button style="width: 40%;" class="btn btn-outline-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left me-4" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5ZM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5Z"/>
                    </svg>
                Voltar
                </button>
            </a>
        </div>
        <div class="col-4 bg-danger-subtle text-center mb-4" style="
    height:auto;
    border-radius:5%;
    box-shadow: 10px 25px 20px 0px rgba(0,0,0,0.1);
  ">
        <img style="max-width:80%; border-radius:10%;" class="mt-3" src="<?php echo $imagem ?>" alt="Imagem do Produto">
            <div class="col text-start">

            <dt class="col-sm-5 fs-4">
                <?php echo $nome?>
            </dt>

            <dd class="col mb-2 ">
                <?php echo $descricao?>
            </dd>

            <dd class="mb-0 lead">
                Categoria: <?php echo $categoria?>
            </dd>

            <dd class="mb-0 lead">
               Marca: <?php echo $marca?>
            </dd>

            <dt class="text-end fs-3 mb-2">
                R$<?php echo $preco?>
            </dt>
            </div>
        </div>
    </div>
</div>




<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>