<?php 
include "../includes/cabecalho.php";
include "../includes/conexao.php";

$id = $_GET["id"];
$imagem = "";
$descricao = "";
$categoria = "";
$marca = "";
$preco = "";
$id_fornecedores = "";
$sql = "select * from t_produtos where id = $id";
$todos_os_produtos = mysqli_query($conexao, $sql);
while ($um_produto = mysqli_fetch_assoc($todos_os_produtos)):
    $imagem = $um_produto["imagem"];
    $descricao = $um_produto["descricao"];
    $categoria = $um_produto["categoria"];
    $marca = $um_produto["marca"];
    $preco = $um_produto["preco"];
    $id_fornecedores = $um_produto["id_fornecedores"];
    endwhile
?>
<h1>Editar Produto <?php echo $id;?></h1>
<form method="post" action="atualizar.php?id=<?php echo $id;?>">
Imagem: <input type="file" value="<?php echo $imagem;?>">

<button type="submit">Atualizar</button>


</form>
<?php
mysqli_close($conexao);
include "../includes/rodape.php"
?>