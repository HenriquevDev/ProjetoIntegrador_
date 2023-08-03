<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Suporte</title>
</head>
<body>
    <h1>Suporte</h1>
    <?php
    include "../includes/conexao.php";

    $query = "SELECT * FROM t_suporte";
    $resultado = mysqli_query($conexao, $query);

    if (mysqli_num_rows($resultado) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Assunto</th>";
        echo "<th>Descrição</th>";
        echo "</tr>";

        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['assunto'] . "</td>";
            echo "<td>" . $row['descricao'] . "</td>";
            echo "<td>";
            echo "<a href='visualizar4.php?id=" . $row['id'] . "'>Visualizar</a> ";
            echo "<a href='excluir4.php?id=" . $row['id'] . "'>Excluir</a>";
            echo "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Nenhuma mensagem de suporte encontrada.";
    }
    ?>
</body>
</html>
