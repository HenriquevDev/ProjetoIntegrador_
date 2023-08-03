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

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $novoNome = $_POST['nome'];
            $novoEmail = $_POST['email'];

            $updateQuery = "UPDATE t_usuario SET nome = '$novoNome', email = '$novoEmail' WHERE id = '$idCliente'";
            $atualizacao = mysqli_query($conexao, $updateQuery);

            if ($atualizacao) {
                
                header("Location: ../painel/index.php?id=$idCliente");
                exit; 
            } else {
                echo "<p class='message'>Erro ao atualizar os dados do cliente: " . mysqli_error($conexao) . "</p>";
            }
        }
?>
        <!DOCTYPE html>
        <html>

        <head>
            <meta charset="UTF-8">
            <title>Editar Cliente</title>
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

                a {
                    display: inline-block;
                    text-decoration: none;
                    color: #3366cc;
                    margin-top: 10px;
                }

                a:hover {
                    text-decoration: underline;
                }

                .message {
                    color: #3366cc;
                }
            </style>
        </head>

        <body>
            <h1>Editar Cliente</h1>
            <form method="post">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>" required><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>" required><br>
                <input type="submit" value="Atualizar">
            </form>
        </body>

        </html>
<?php
    } else {
        echo "<p>Nenhum cliente encontrado com o ID fornecido.</p>";
    }
} else {
    echo "<p>Nenhum ID de cliente foi fornecido na URL.</p>";
}
?>