<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include "head.php"; ?>
</head>
<body>

<header>
<?php include "topo.php"; ?>
</header>


<main>

<?php
include "menu.php";
?>


<div class="conteudo">
                    <?php 
                    $id = $_GET['id'];

                    $rs = $pdo->query("SELECT * FROM categoria Where id = $id");
                    $row = $rs->fetch(PDO::FETCH_OBJ);
                   
                  
                    $nome_categoria= $row->nome;   
                    ?>
                    <h1 class="tutulo3">Editar Categoria:</h1>
                    <form class= "formulario" name="formulario1" action="funcao_edita_categoria.php?funcao=edita_categoria" method="post"  enctype="multipart/form-data">                       
                        <div class="">
                        <p>Nome da categoria:</p>
                        <input class="form-control video2" type="text" name="nome" value="<?php echo $nome_categoria;?>" placeholder="nome da categoria" aria-label="default input example" require>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                        <div class=""><button type="submit" class="btn btn-warning botao5">Atualizar</button></div>
                    </form>
</div>
</div>







</div>















</main>
<footer></footer>
    
</body>
</html>