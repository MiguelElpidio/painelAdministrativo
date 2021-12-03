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
            <div class="container">
                <h2>Painel Restrito:</h2><br>
                Adicionar Categoria:
                <div class="formulario_empresa">  
                    <form action="funcao-categoria.php?funcao=addcategoria" method="post">
                        <input type="text" name="nome" placeholder="Nome"></input><br>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
</div>
</div>







</div>















</main>
<footer></footer>
    
</body>
</html>