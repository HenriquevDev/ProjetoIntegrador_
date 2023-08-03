<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Excluir Produto</title>
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
    <h1>Excluir Produto</h1>
    <?php
    include "../includes/conexao.php";

    if (isset($_GET['id'])) {
        $idProduto = $_GET['id'];

        $query = "SELECT * FROM t_produtos WHERE id = '$idProduto'";
        $resultado = mysqli_query($conexao, $query);

        if (!$resultado) {
            die("Erro na consulta: " . mysqli_error($conexao));
        }

        if (mysqli_num_rows($resultado) > 0) {
            $row = mysqli_fetch_assoc($resultado);
            $nome = $row['nome'];
            $preco = $row['preco'];

            if (isset($_POST['confirmar'])) {
                $deleteQuery = "DELETE FROM t_produtos WHERE id = '$idProduto'";
                $exclusao = mysqli_query($conexao, $deleteQuery);

                if ($exclusao) {
                    echo "<p>O produto foi excluído com sucesso!</p>";
                } else {
                    echo "<p>Erro ao excluir o produto: " . mysqli_error($conexao) . "</p>";
                }
            }
    ?>
            <div class="confirmation">
                <p>Tem certeza de que deseja excluir o seguinte produto?</p>
                <p>ID: <?php echo $idProduto; ?></p>
                <p>Nome: <?php echo $nome; ?></p>
                <p>Preço: <?php echo $preco; ?></p>
                <form method="post">
                    <input type="submit" name="confirmar" value="Confirmar Exclusão">
                </form>
            </div>
    <?php
        } else {
            echo "<p>Nenhum produto encontrado com o ID fornecido.</p>";
        }
    } else {
        echo "<p>Nenhum ID de produto foi fornecido na URL.</p>";
    }
    ?>
</body>
</html>

