<!DOCTYPE html>

<html>



<head>

    <meta charset="UTF-8">

    <title>Adicionar Produto</title>

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

            width: 400px;

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

        input[type="number"],

        input[type="url"],

        textarea {

            width: 100%;

            padding: 8px;

            margin-bottom: 10px;

            border: 1px solid #ccc;

            border-radius: 4px;

        }



        input[type="submit"] {

            background-color: #3366cc;

            color: #ffffff;

            padding: 8px 16px;

            border: none;

            border-radius: 4px;

            cursor: pointer;

        }



        input[type="submit"]:hover {

            background-color: #204d74;

        }
    </style>

</head>



<body>

    <h1>Adicionar Produto</h1>



    <?php

    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        

        if (

            isset($_POST['nome']) && !empty($_POST['nome']) &&

            isset($_POST['descricao']) && !empty($_POST['descricao']) &&

            isset($_POST['categoria']) && !empty($_POST['categoria']) &&

            isset($_POST['marca']) && !empty($_POST['marca']) &&

            isset($_POST['preco']) && is_numeric($_POST['preco']) &&

            isset($_POST['imagem']) && !empty($_POST['imagem'])

        ) {



            $nome = $_POST['nome'];

            $descricao = $_POST['descricao'];

            $categoria = $_POST['categoria'];

            $marca = $_POST['marca'];

            $preco = $_POST['preco'];

            $imagem = $_POST['imagem'];





            echo "<p>Por favor, preencha todos os campos obrigatórios.</p>";
        }
    }

    ?>

    <form method="post" action="inserir.php">

        <label for="nome">Nome do Produto:</label>

        <input type="text" id="nome" name="nome" required>



        <label for="descricao">Descrição:</label>

        <textarea id="descricao" name="descricao" required></textarea>



        <label for="categoria">Categoria:</label>

        <input type="text" id="categoria" name="categoria" required>



        <label for="marca">Marca:</label>

        <input type="text" id="marca" name="marca" required>



        <label for="preco">Preço:</label>

        <input type="number" id="preco" name="preco" step="0.01" required>



        <label for="imagem">URL da Imagem:</label>

        <input type="url" id="imagem" name="imagem" required>



        <input type="submit" value="Adicionar Produto">

    </form>

</body>



</html>