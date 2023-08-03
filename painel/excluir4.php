<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Excluir Mensagem de Suporte</title>
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
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <h1>Excluir Mensagem de Suporte</h1>
    <?php
    include "../includes/conexao.php";

    if (isset($_GET['id'])) {
        $idSuporte = $_GET['id'];

        $query = "SELECT * FROM t_suporte WHERE id = '$idSuporte'";
        $resultado = mysqli_query($conexao, $query);

        if (!$resultado) {
            die("Erro na consulta: " . mysqli_error($conexao));
        }

        if (mysqli_num_rows($resultado) > 0) {
            $row = mysqli_fetch_assoc($resultado);
            $assunto = $row['assunto'];
            $descricao = $row['descricao'];

            if (isset($_POST['confirmar'])) {
                $deleteQuery = "DELETE FROM t_suporte WHERE id = '$idSuporte'";
                $exclusao = mysqli_query($conexao, $deleteQuery);

                if ($exclusao) {
                    echo "<p>A mensagem de suporte foi excluída com sucesso!</p>";
                } else {
                    echo "<p>Erro ao excluir a mensagem de suporte: " . mysqli_error($conexao) . "</p>";
                }
            }
    ?>
            <div class="confirmation">
                <p>Tem certeza de que deseja excluir a seguinte mensagem de suporte?</p>
                <p>ID: <?php echo $idSuporte; ?></p>
                <p>Assunto: <?php echo $assunto; ?></p>
                <p>Mensagem: <?php echo $descricao; ?></p>
                <form method="post">
                    <input type="submit" name="confirmar" value="Confirmar Exclusão">
                </form>
            </div>
    <?php
        } else {
            echo "<p>Nenhuma mensagem de suporte encontrada com o ID fornecido.</p>";
        }
    } else {
        echo "<p>Nenhum ID de mensagem de suporte foi fornecido na URL.</p>";
    }
    ?>
</body>
</html>

