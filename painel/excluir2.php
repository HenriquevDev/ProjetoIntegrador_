<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Excluir Cliente</title>
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

        .confirmation {
            background-color: #ffffff;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }

        .confirmation p {
            margin: 5px 0;
        }

        .confirmation form {
            margin-top: 20px;
        }

        .confirmation form input[type="submit"] {
            background-color: #cc3333;
            color: #ffffff;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }

        .confirmation form input[type="submit"]:hover {
            background-color: #b32929;
        }

        .confirmation a {
            color: #3366cc;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Excluir Cliente</h1>
    <?php
    include "../includes/conexao.php";

    if (isset($_GET['id'])) {
        $idCliente = $_GET['id'];

        $query = "SELECT * FROM t_usuario WHERE id = '$idCliente'";
        $resultado = mysqli_query($conexao, $query);

        if (!$resultado) {
            die("Erro na consulta: " . mysqli_error($conexao));
        }

        if (mysqli_num_rows($resultado) > 0) {
            $row = mysqli_fetch_assoc($resultado);
            $nome = $row['nome'];
            $email = $row['email'];

            if (isset($_POST['confirmar'])) {
                $deleteQuery = "DELETE FROM t_usuario WHERE id = '$idCliente'";
                $exclusao = mysqli_query($conexao, $deleteQuery);

                if ($exclusao) {
                    echo "<p>O cliente foi excluído com sucesso!</p>";
                } else {
                    echo "<p>Erro ao excluir o cliente: " . mysqli_error($conexao) . "</p>";
                }
            }
    ?>
            <div class="confirmation">
                <p>Tem certeza de que deseja excluir o seguinte cliente?</p>
                <p>ID: <?php echo $idCliente; ?></p>
                <p>Nome: <?php echo $nome; ?></p>
                <p>Email: <?php echo $email; ?></p>
                <form method="post">
                    <input type="submit" name="confirmar" value="Confirmar Exclusão">
                </form>
            </div>
    <?php
        } else {
            echo "<p>Nenhum cliente encontrado com o ID fornecido.</p>";
        }
    } else {
        echo "<p>Nenhum ID de cliente foi fornecido na URL.</p>";
    }
    ?>
</body>
</html>
