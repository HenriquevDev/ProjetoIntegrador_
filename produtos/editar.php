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
while ($um_produto = mysqli_fetch_assoc($todos_os_produtos)):
    
    $imagem = $um_produto["imagem"];
     $nome = $um_produto["nome"];
     $descricao = $um_produto["descricao"];
     $categoria = $um_produto["categoria"];
     $marca = $um_produto["marca"];
     $preco = $um_produto["preco"];
endwhile;
?>

<h1>Editar Produto 
    <?php echo $id;?>
</h1>

<form method="post" action="atualizar.php?id=<?php echo $id?>">

Imagem: <input type="text" name="imagem" value="<?php echo $imagem?>">

Nome: <input type="text" name="nome" value="<?php echo $nome?>">

Descrição: <input type="text" name="descricao" value="<?php echo $descricao?>">

Categoria: <input type="text" name="categoria" value="<?php echo $categoria?>">

Marca: <input type="text" name="marca" value="<?php echo $marca?>">

Preço: <input type="number" name="preco" value="<?php echo $preco?>">

<button class="btn btn-outline-success" type="submit">Atualizar</button>

</form>
<?php
mysqli_close($conexao);
include "../includes/rodape.php"
?>
