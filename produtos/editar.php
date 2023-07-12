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
$sql = "select * from t_produtos where id = '$id'";
$todos_os_produtos = mysqli_query($conexao, $sql);
while (
    $um_produto = mysqli_fetch_assoc($todos_os_produtos)):
    $imagem = $um_produto["imagem"];
    $nome = $um_produto["nome"];
    $descricao = $um_produto["descricao"];
    $categoria = $um_produto["categoria"];
    $marca = $um_produto["marca"];
    $preco = $um_produto["preco"];
endwhile;
?>
<h1>Editar Produto <?php echo $id;?></h1>
<form method="post" action="atualizar.php?id=<?php echo $id;?>">
Imagem: <input type="text" value="<?php echo $imagem;?>">
Descrição: <input type="text" value="<?php echo $descricao;?>">


<div class="col-12">
<button class="btn btn-outline-success" type="submit">Atualizar</button></div>
</form>
<?php
mysqli_close($conexao);
include "../includes/rodape.php"
?>