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

<h1>Ficha de Produtos</h1>
<div class="row justify-content-center">
    <div class="col-3 bg-danger-subtle text-center" style="
    height:22em;
    border-radius:10%;
    box-shadow: 10px 25px 20px 0px rgba(0,0,0,0.1);
  ">
        <img style="width:350px; border-radius:10%;" class="mt-3" src="<?php echo $imagem ?>"  alt="Imagem do Produto">

        <h4 class="col text-start ms-5 mt-2"><?php echo $nome?></h4>
        <p class="col text-start ms-5 mt-2 fs-5"><?php echo $descricao?></p>
        <h5 class="col text-end me-4 mt-2">R$<?php echo $preco ?></h5>
    </div>
</div>




Imagem: <img style="width: 6em;" src="<?php echo $imagem; ?>" alt="Imagem do produto"> <br>
Nome: <?php echo $nome; ?> <br>
Descrição: <?php echo $descricao; ?> <br>
Categoria: <?php echo $categoria; ?> <br>
Marca: <?php echo $marca; ?> <br>
Preço: <?php echo $preco; ?> <br>

<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>