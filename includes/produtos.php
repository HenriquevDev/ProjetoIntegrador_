<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
</head>
<body>
    <h1>Produtos</h1>
    <?php
    include "../includes/conexao.php";

    $query = "SELECT * FROM t_produtos";
    $resultado = mysqli_query($conexao, $query);

    if (mysqli_num_rows($resultado) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nome</th>";
        echo "<th>Preço</th>";
        echo "</tr>";

        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['preco'] . "</td>";
            echo "<td>";
            echo "<a href='visualizar3.php?id=" . $row['id'] . "'>Visualizar</a> ";
            echo "<a href='editar3.php?id=" . $row['id'] . "'>Editar</a> ";
            echo "<a href='excluir3.php?id=" . $row['id'] . "'>Excluir</a>";
            echo "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Nenhum produto encontrado.";
    }
    ?>
</body>
</html>

