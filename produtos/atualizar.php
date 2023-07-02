<?php
include "../includes/conexao.php";
$id = $_GET["id"];
$imagem = $_FILES["imagem"];
$descricao = $_POST["descricao"];
$categoria = $_POST["categoria"];
$marca = $_POST["marca"];
$preco = $_POST["preco"];
$id_fornecedores = $_POST["id_fornecedores"];
$sql = "update suporte set imagem = '$imagem', descricao = '$descricao', categoria = '$categoria', marca = '$marca', preco='$preco',id_fornecedores='$id_fornecedores' where if =$id";
mysqli_query($conexao,$sql);
mysqli_close($conexao);
header("locaiton: selecionar.php")
?>