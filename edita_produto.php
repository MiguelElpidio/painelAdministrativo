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
<h2>Editar Produto</h2>
<?php
$id = $_GET['id'];

$rs = $pdo->query("SELECT * FROM produto Where id = $id");

$row = $rs->fetch(PDO::FETCH_OBJ);

$id = $row->id;
$nome = $row->nome;
$categoria = $row->categoria;
$de = $row->de;
$por = $row->por;
?>
<div class="container">
    <form class="formulario"method="POST" action="funcao_edita.php?funcao=atualizaproduto" enctype= "multipart/form-data" >
    <div class="text"><span>Nome:</span><input type="text" value="<?php echo $nome; ?>" name="nome" required></div>
    <div class="text"><span>De:</span><input type="text" value="<?php echo $de; ?>" name="de" required></div>
    <div class="text"><span>Por:</span><input type="text" value="<?php echo $por; ?>" name="por" required></div>
    <div class="text"><span>categoria:</span><input name="categoria" type="text"value="<?php echo $categoria?> "></div>
    <div><span>* Não é possivel alterar a imagem</span></div>
    <div class="atualizar">

        <input type="hidden" value="<?php echo $id; ?>"name="id"> 

    <input type="submit" value="Atualizar"></div> 
</form>
</div> 
</div>
</div>







</div>















</main>
<footer></footer>
    
</body>
</html>