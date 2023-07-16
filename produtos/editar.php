<?php
include "../includes/cabecalho.php";
include "../includes/conexao.php";

$id = $_GET["id"];


$imagem = "";
$nome = "";
$descricao = "";
$categoria = "";
$marca = "";
$preco = "";

$sql = "select * from t_produtos where id = $id";
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

<h1>Editar Produto
    <?php echo $id; ?>
</h1>

<form class="row ms-3 me-3" method="post" action="atualizar.php?id=<?php echo $id ?>">
    <div class="col-3">
        Imagem:
        <input class="form-control" type="text" name="imagem" value="<?php echo $imagem ?>">
    </div>

    <div class="col-3">
        Nome:
        <input class="form-control" type="text" name="nome" value="<?php echo $nome ?>">
    </div>

    <div class="col-3">
        Descrição:
        <input class="form-control" type="text" name="descricao" value="<?php echo $descricao ?>">
    </div>

    <div class="col-3">
        Categoria: 
            <input class="form-control" type="text" name="categoria" value="<?php echo $categoria ?>">
    </div>

    <div class="col-3">
        Marca: 
            <input class="form-control" type="text" name="marca" value="<?php echo $marca ?>">
    </div>

    <div class="col-3">
        Preço:
            <input class="form-control" type="number" name="preco" value="<?php echo $preco ?>">
    </div>

    <div class="text-center mt-3 mb-3">
    <button class="btn btn-outline-primary w-25" type="submit">Atualizar</button>
</div>
</form>
<?php
mysqli_close($conexao);
include "../includes/rodape.php"
?>