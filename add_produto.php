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

                <div class="col-10">
                    <?php 
                    include "../config.php";
                    $id = 1;

                    ?>
                    <h1 class="tutulo3">Cadastro de produto:</h1>
                    <form class= "formulario" name="formulario1" action="funcao_cadastro.php?funcao_cadastro=cadastroproduto" method="post"  enctype="multipart/form-data">                       
                        <div class="">
                        <p>Nome do produto:</p>
                        <input class="form-control video2" type="text" name="nome_produto" value="" placeholder="" aria-label="default input example" require>
                        </div>
                        <div>
                        <p>Categoria:</p>
                        <input class="form-control video2" type="text" name="categoria" value="" placeholder="" aria-label="default input example" require>
                        </div>
                        <div class="foto1">
                            <p>Selecione a foto:</p>
                            <input class="" type="file" name="arquivo" required>
                        </div>
                        <div class="">
                        <p>Valor antes:</p>
                        <input class="form-control video2" type="text" name="de" value="" placeholder="" aria-label="default input example" require>
                        </div>
                        <div class="por">
                        <p>Valor agora:</p>
                        <input class="form-control video2" type="text" name="por" value="" placeholder="" aria-label="default input example" require>
                        </div>
                        <div class=""><button type="submit" class="btn btn-warning botao5">adicionar</button></div>
                    </form>
                </div>


</div>







</div>















</main>
<footer></footer>
    
</body>
</html>