<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="icon" type="png" href="../img/icone.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema da Papelaria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="../pagina/style.css">


    <?php
    include "../includes/conexao.php";
    ?>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .header {
            background-color: #F27979;
            color: white;
            padding: 20px;
            text-align: center;
            font-weight: bold;
            font-size: 24px;
        }

        .container {
            margin-top: 50px;
        }

        .btn-primary {
            background-color: orangered;
            border-color: orangered;
        }

        .btn-primary:hover {
            background-color: #da4a4a;
            border-color: #da4a4a;
        }

        .tabela {
            margin-top: 30px;
        }

        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <header class="header">
        Gerenciamento da Papelaria
    </header>

    <main class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="#" class="btn btn-primary btn-block mb-3 abrir-tabela" data-tabela="funcionarios">Funcionários</a>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn btn-primary btn-block mb-3 abrir-tabela" data-tabela="clientes">Clientes</a>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn btn-primary btn-block mb-3 abrir-tabela" data-tabela="produtos">Produtos</a>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn btn-primary btn-block mb-3 abrir-tabela" data-tabela="suporte">Suporte</a>
            </div>
        </div>
    </main>

    <div id="tabela-funcionarios" class="tabela" style="display: none;">
        <div class="container">

            <?php
            include "../includes/funcionarios.php";
            ?>

        </div>
    </div>

    <div id="tabela-clientes" class="tabela" style="display: none;">
        <div class="container">

            <?php
            include "../includes/clientes.php";
            ?>
        </div>
    </div>

    <div id="tabela-produtos" class="tabela" style="display: none;">
        <div class="container">

            <?php
            include "../includes/produtos.php";
            ?>

        </div>
    </div>

    <div id="tabela-suporte" class="tabela" style="display: none;">
        <div class="container">

            <?php
            include "../includes/suporte.php";
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.visualizar').on('click', function() {

                var nome = $(this).closest('tr').find('td:first-child').text();
                console.log('Visualizar: ' + nome);
            });

            $('.editar').on('click', function() {

                var nome = $(this).closest('tr').find('td:first-child').text();
                console.log('Editar: ' + nome);
            });

            $('.excluir').on('click', function() {

                var nome = $(this).closest('tr').find('td:first-child').text();
                console.log('Excluir: ' + nome);
            });
        });


        $('.abrir-tabela').on('click', function() {
            var tabela = $(this).data('tabela');
            $('.tabela').hide();
            $('#tabela-' + tabela).fadeIn();
        });

        $(document).ready(function() {
            $('.table tbody tr').on('click', function() {
                $(this).siblings().find('.opcoes').hide();
                $(this).find('.opcoes').toggle();
            });
        });
    </script>

    <?php
    include "../includes/rodape.php";
    ?>
</body>

</html>