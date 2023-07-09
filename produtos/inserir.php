<?php
include "../includes/conexao.php";

$imagem = $_POST["imagem"];
$descricao = $_POST["descricao"];
$categoria = $_POST["categoria"];
$marca = $_POST["marca"];
$preco = $_POST["preco"];
$id_fornecedores = $_POST ["id_fornecedores"];
$sql = "insert into t_produtos(imagem,descricao,categoria,marca,preco,id_fornecedores) values ('$imagem','$descricao','$categoria','$marca','$preco','$id_fornecedores')";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php")
?>