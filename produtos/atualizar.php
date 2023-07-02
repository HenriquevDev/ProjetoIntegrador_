<?php
include "../includes/conexao.php";
$id = $_GET["id"];
$imagem = $_POST["imagem"];
$descricao = $_POST["descricao"];
$categoria = $_POST["categoria"];
$marca = $_POST["marca"];
$preco = $_POST["preco"];
$id_fornecedores = $_POST["id_fornecedores"];
$sql = "update t_produtos set imagem = '$imagem', descricao = '$descricao', categoria = '$categoria', marca = '$marca', preco='$preco',id_fornecedores='$id_fornecedores' where id ='$id'";
mysqli_query($conexao,$sql);
mysqli_close($conexao);
header("location: selecionar.php")
?>