<?php 
include "../includes/cabecalho.php";
include "../includes/conexao.php";

$id = $_GET["id"];

$email = "";
$assunto = "";
$descricao = "";
$sql = "select * from t_produtos where id = '$id'";
$todos_os_produtos = mysqli_query($conexao,$sql);
while($um_produto = mysqli_fetch_assoc($todos_os_produtos)):

    $imagem = $um_produto["imagem"];
    $descricao = $um_produto["descricao"];
    $categoria = $um_produto["categoria"];
    $marca = $um_produto["marca"];
    $preco = $um_produto["preco"];
    $id_fornecedores = $um_produto["id_fornecedores"];

endwhile;
?>

<h1>Ficha de Produtos</h1>

Imagem: <?php echo $imagem?> <br>
Descrição: <?php echo $descricao?> <br>
Categoria: <?php echo $categoria?> <br>
Marca: <?php echo $marca?> <br>
Preço: <?php echo $preco?> <br>
Id dos Fornecedores: <?php echo $id_fornecedores?> <br>

<?php 
mysqli_close($conexao);
include "../includes/rodape.php";
?>