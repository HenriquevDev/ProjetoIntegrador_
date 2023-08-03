<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Excluir Funcionário</title>
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
    <h1>Excluir Funcionário</h1>
    <?php
    include "../includes/conexao.php";
    ?>


    <?php

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


            if (isset($_POST['confirmar'])) {

                $deleteQuery = "DELETE FROM t_funcionarios WHERE id = '$idFuncionario'";
                $exclusao = mysqli_query($conexao, $deleteQuery);

                if ($exclusao) {
                    echo "<p>O funcionário foi excluído com sucesso!</p>";
                } else {
                    echo "<p>Erro ao excluir o funcionário: " . mysqli_error($conexao) . "</p>";
                }
            }
        } else {
            echo "<p>Nenhum funcionário encontrado com o ID fornecido.</p>";
        }


        mysqli_close($conexao);
    } else {
        echo "<p>Nenhum ID de funcionário foi fornecido na URL.</p>";
    }
    ?>
    

    <div class="confirmation">
        <p>Tem certeza de que deseja excluir o seguinte funcionário?</p>
        <p>ID: <?php echo $idFuncionario; ?></p>
        <p>Nome: <?php echo $nome; ?></p>
        <p>Email: <?php echo $email; ?></p>
        <form method="post">
            <input type="submit" name="confirmar" value="Confirmar Exclusão">
        </form>
    </div>
</body>

</html>