<?php
include "../includes/cabecalho.php";
include "../includes/conexao.php";

$id = $_GET["id"];

$nome = "";
$imagem = "";
$descricao = "";
$categoria = "";
$marca = "";
$preco = ""; 
$sql = "select * from t_produtos where id = $id";
$todos_os_produtos = mysqli_query($conexao, $sql);
while($um_produto = mysqli_fetch_assoc($todos_os_produtos)):
    $nome = $um_produto["nome"];
    $imagem = $um_produto["imagem"];
    $descricao = $um_produto["descricao"];
    $categoria = $um_produto["categoria"];
    $marca = $um_produto["marca"];
    $preco = $um_produto["preco"];
endwhile;
    
?>


 

<div class="row" style="height: 600px;">
<div class="col-md-1">
<!-- Conteúdo da primeira coluna -->
</div>
<div class="col-md-4">
<!-- Conteúdo da segunda coluna, incluindo a imagem -->
<img src="<?php echo $imagem; ?>" class="img-fluid" alt="...">
</div>
<div class="text-center col-md-6 col-xs-x">
<!-- Conteúdo vazio para ocupar espaço na mesma linha -->
<br> 
<?php
    $sql = "select * from t_produtos";
    $todos_os_produtos = mysqli_query($conexao, $sql);
    $um_produto = mysqli_fetch_assoc($todos_os_produtos);
    ?>
<p class="text-center fs-4"><?php echo $nome ?></p>
<p class=" badge bg-danger text-wrap fs-6" style="width: 10rem;"><?php ?></p>
<br>

<?php echo $descricao;?>

<br>
<br>
    <div class="estrela">

 

      <a href="javascript:void(0)" onclick="Avaliar(1)">
<img class="estreladesligada" width="4%" src="../img/staroff.png" id="s1"></a>

 

      <a href="javascript:void(0)" onclick="Avaliar(2)">
<img class="estreladesligada" width="4%" src="../img/staroff.png" id="s2"></a>

 

      <a href="javascript:void(0)" onclick="Avaliar(3)">
<img class="estreladesligada" width="4%" src="../img/staroff.png" id="s3"></a>

 

      <a href="javascript:void(0)" onclick="Avaliar(4)">
<img class="estreladesligada" width="4%" src="../img/staroff.png" id="s4"></a>

 

      <a href="javascript:void(0)" onclick="Avaliar(5)">
<img class="estreladesligada" width="4%" src="../img/staroff.png" id="s5"></a>

 

    </div>

 

    <p class="text-center fs-10">De Sua Valiação</p>

 

    <p class="text-center fs-4">R$<?php echo $preco;?></p>

 

    <br>

 
    <a class="fancy" href="#">
<span class="top-key"></span>
<span class="text">Comprar</span>
<span class="bottom-key-1"></span>
<span class="bottom-key-2"></span>

</a>

 

    <br>
<br>
<div class="container mt-5 w-50">
<div class="input-group mb-3">
<button id="btn-subtract" class="btn btn-primary" type="button">-</button>
<input type="text" id="input-number" class="form-control text-center" value="0" aria-label="Number">
<button id="btn-add" class="btn btn-primary" type="button">+</button>
</div>
</div>
<div class="row justify-content-center">
<div class="input-group input-group-sl w-50 mb-5">
<span class="input-group-text">$</span>
<span class="input-group-text">0.00</span>
<input type="text" class="form-control " aria-label="Dollar amount (with dot and two decimal places)">
</div>
</div>

 

  </div>
</div>

 

<div class="container">
<div class="row">
<div class="col">
<h3>Comentários</h3>

 

      <div class="form-floating w-50 ms-3">
<textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
<label for="floatingTextarea2">Comentario</label>
</div>
<button type="button" class="btn btn-outline-danger ms-3">Enviar</button>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="script.js"></script>
<script src="frete.js"></script>

 

 


</body>

 

</html>