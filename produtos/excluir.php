<?php 
include "../includes/conexao.php";
$id = $_GET["id"];

$sql = "delete from t_produtos where id = '$id'";
mysqli_query($conexao,$sql);
mysqli_close($conexao);
header("location:selecionar.php")


?>