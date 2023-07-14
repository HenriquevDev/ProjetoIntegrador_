<?php
include "../includes/conexao.php";

$id = $_GET["id"];

$imagem = $_POST["imagem"];
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$categoria = $_POST["categoria"];
$marca = $_POST["marca"];
$preco = $_POST["preco"];

$sql = "update t_produtos set imagem = '$imagem', nome = '$nome', descricao = '$descricao', categoria = '$categoria', marca = '$marca', preco='$preco' where id = '$id'";

mysqli_query($conexao,$sql);
mysqli_close($conexao);
header("location: selecionar.php");
?>