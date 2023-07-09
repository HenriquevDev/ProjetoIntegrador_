<?php
include "../includes/cabecalho.php";
?>
<h1>Novo Produto</h1>

<form" action="inserir.php" method="post">
   Imagem <input name="imagem">
   Descrição <input name="descricao">
   Categoria <input type="text" name="categoria">
   Marca <input type="text" name="marca">
   Preço <input type="number" name="preco">
   Id de Forneçedores <input type="number" name="id_fornecedores">


    <br>
    <button class="btn btn-outline-success" type="submit">Salvar</button>
</form>
<?php
include "../includes/rodape.php";
?>