<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Funcionários</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 20px;
        }

        h1 {
            color: #3366cc;
            border-bottom: 2px solid #3366cc;
            padding-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #3366cc;
            color: #ffffff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            display: inline-block;
            padding: 6px 12px;
            background-color: #3366cc;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
            margin-right: 6px;
        }

        a:hover {
            background-color: #F27979;
        }

        .actions {
            text-align: center;
        }

        .no-records {
            text-align: center;
            font-style: italic;
        }
    </style>
</head>

<body>
    <h1>Lista de Funcionários</h1>
    <?php
    $query = "SELECT * FROM t_funcionarios";
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
            echo "<a href='visualizar.php?id=" . $row['id'] . "'>Visualizar</a> ";
            echo "<a href='editar.php?id=" . $row['id'] . "'>Editar</a> ";
            echo "<a href='excluir.php?id=" . $row['id'] . "'>Excluir</a>";
            echo "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Nenhum funcionário encontrado.";
    }
    ?>
</body>

</html>