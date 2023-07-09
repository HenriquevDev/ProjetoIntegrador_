<?php
include "../includes/cabecalho.php";
include "../includes/conexao.php";
?>
<p class="mt-3 ms-2">
    <a href="novo.php"><button class="btn btn-outline-danger">Adicionar Produto</button></a>
</p>
<h2>Listagem de Produtos</h2>
<table class="table table-bordered">
    <tr class="table text-center table-secondary table-striped-columns fw-semibold">
        <td>ID</td>
        <td>Imagem</td>
        <td>Descrição</td>
        <td>Categoria</td>
        <td>Marca</td>
        <td>Preco</td>
        <td>Id Fornecedores</td>
        <td class="col-2">Açoes</td>
    </tr>

    <?php
    $sql = "select * from t_produtos";
    $todos_os_produtos = mysqli_query($conexao, $sql);
    while ($um_produto = mysqli_fetch_assoc($todos_os_produtos)) :
    ?>

<tr>
        <td class="text-center"><?php echo $um_produto['id']; ?></td>

        <td class="text-center"><img style="width: 6em;" src="<?php echo $um_produto['imagem']; ?>"></td>

        <td><?php echo $um_produto['descricao']; ?></td>

        <td><?php echo $um_produto['categoria']; ?></td>

        <td><?php echo $um_produto['marca']; ?></td>

        <td><?php echo $um_produto['preco']; ?></td>

        <td><?php echo $um_produto['id_fornecedores']; ?></td>

        <td class="text-center">
            
                <a href="vizualizar.php?=<?php echo $um_produto['id']?>"><button class="btn btn-outline-dark">Vizualizar</button></a>
                <a href="editar.php?=<?php echo $um_produto['id']?>"><button class="btn btn-outline-dark">Editar</button></a>
                <a href="excluir.php?=<?php echo $um_produto['id']?>"><button class="btn btn-outline-dark">Excluir</button></a>
            
        </td>
</tr>
    <?php
    endwhile;
    ?>
</table>
<?php
include "../includes/rodape.php"
?>