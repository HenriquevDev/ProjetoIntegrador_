<?php
include "../includes/conexao.php";

$imagem = $_POST["imagem"];
$nome= $_POST["nome"];
$descricao = $_POST["descricao"];
$categoria = $_POST["categoria"];
$marca = $_POST["marca"];
$preco = $_POST["preco"];
$sql = "insert into t_produtos(imagem,nome,descricao,categoria,marca,preco) values ('$imagem','$nome','$descricao','$categoria','$marca','$preco')";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php");
?>