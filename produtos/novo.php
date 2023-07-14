<?php
include "../includes/cabecalho.php";
?>
<h1>Novo Produto</h1>

<form action="inserir.php" method="post">
    <div class="row justify-content-center">
        <div class="col-3 mb-2">
        <p class="fw-bold">URL Imagem</p>
            <input class=" form-control" name="imagem">
        </div>

        <div class="col-3 mb-2">
            <p class="fw-bold">Nome</p>
            <input class=" form-control" type="text" name="nome">
        </div>
        
        <div class="col-3 mb-2">
            <p class="fw-bold">Descrição</p>
            <input class=" form-control" type="text" name="descricao">
        </div>

        <div class=" col-3 mb-2">
        <p class="fw-bold">Categoria</p>
        <input class=" form-control " type="text" name="categoria">
        </div>

        <div class="col-2 mb-2">
        <p class="fw-bold">Marca do Produto</p>
        <input class="form-control" type="text" name="marca">
        </div>

        <div class="col-2 mb-2">
        <p class="fw-bold">Preço (R$)</p>
        <input class="form-control"type="number" name="preco">
        </div>
    </div>
    <div class="text-center">
        <br>
        <button class="btn btn-outline-success w-25 fs-5" type="submit">Salvar</button>
    </div>
    </form>
    <?php
    include "../includes/rodape.php";
    ?>