<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
</head>
<body>
    <h1>Clientes</h1>
    <?php
    include "../includes/conexao.php";

    $query = "SELECT * FROM t_usuario";
    $resultado = mysqli_query($conexao, $query);

    if (mysqli_num_rows($resultado) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nome</th>";
        echo "<th>Email</th>";
        echo "</tr>";

        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>";
            echo "<a href='visualizar2.php?id=" . $row['id'] . "'>Visualizar</a> ";
            echo "<a href='editar2.php?id=" . $row['id'] . "'>Editar</a> ";
            echo "<a href='excluir2.php?id=" . $row['id'] . "'>Excluir</a>";
            echo "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Nenhum cliente encontrado.";
    }
    ?>
</body>
</html>
