<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Visualizar Funcionário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #007bff;
        }

        p {
            margin: 5px 0;
        }

        .container {
            max-width: 600px;
            background-color: #ffffff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }

        .btn-cancel {
            background-color: #d1d1d1;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-group {
            margin-top: 20px;
        }

        .btn-group .btn {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        include "../includes/conexao.php";

        if (isset($_GET['id'])) {
            $idFuncionario = $_GET['id'];

            $query = "SELECT * FROM t_funcionarios WHERE id = '$idFuncionario'";
            $resultado = mysqli_query($conexao, $query);

            if (!$resultado) {
                die("Erro na consulta: " . mysqli_error($conexao));
            }

            if (mysqli_num_rows($resultado) > 0) {
                $row = mysqli_fetch_assoc($resultado);
                $nome = $row['nome'];
                $email = $row['email'];

                echo "<h1>Dados do Funcionário</h1>";
                echo "<p>ID: " . $idFuncionario . "</p>";
                echo "<p>Nome: " . $nome . "</p>";
                echo "<p>Email: " . $email . "</p>";
            } else {
                echo "<p>Nenhum funcionário encontrado com o ID fornecido.</p>";
            }
        } else {
            echo "<p>Nenhum ID de funcionário foi fornecido na URL.</p>";
        }
        ?>
    </div>
</body>

</html>