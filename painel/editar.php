<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Editar Funcionário</title>
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

        form {
            width: 300px;
            margin: 20px auto;
            background-color: #ffffff;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #3366cc;
            color: #ffffff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #204d74;
        }

        .message {
            color: #3366cc;
        }
    </style>
</head>

<body>
    <h1>Editar Funcionário</h1>
    <?php
    include "../includes/conexao.php";

    if (isset($_GET['id'])) {

        $idFuncionario = $_GET['id'];
        $servidor = "10.125.47.33";
        $usuario = "root";
        $senha = "";
        $banco = "db_integrador";

        $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

        if (!$conexao) {
            die("Erro de conexão: " . mysqli_connect_error());
        }

        $query = "SELECT * FROM t_funcionarios WHERE id = '$idFuncionario'";
        $resultado = mysqli_query($conexao, $query);

        if (!$resultado) {
            die("Erro na consulta: " . mysqli_error($conexao));
        }

        if (mysqli_num_rows($resultado) > 0) {
            $row = mysqli_fetch_assoc($resultado);
            $nome = $row['nome'];
            $email = $row['email'];

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $novoNome = $_POST['nome'];
                $novoEmail = $_POST['email'];

                $updateQuery = "UPDATE t_funcionarios SET nome = '$novoNome', email = '$novoEmail' WHERE id = '$idFuncionario'";
                $atualizacao = mysqli_query($conexao, $updateQuery);

                if ($atualizacao) {
                    echo "<p>Os dados do funcionário foram atualizados com sucesso!</p>";

                    header("Location: ../painel/index.php");
                    exit;
                } else {
                    echo "<p>Erro ao atualizar os dados do funcionário: " . mysqli_error($conexao) . "</p>";
                }
            }
    ?>
            <form method="post">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>" required><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>" required><br>
                <input type="submit" value="Atualizar">
            </form>
    <?php
        } else {
            echo "<p>Nenhum funcionário encontrado com o ID fornecido.</p>";
        }

        mysqli_close($conexao);
    } else {
        echo "<p>Nenhum ID de funcionário foi fornecido na URL.</p>";
    }
    ?>
</body>

</html>