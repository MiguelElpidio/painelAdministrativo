<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include "head.php"; ?>
<link rel="stylesheet" href="style-listagem.css">
</head>
<body>

<header>
<?php include "topo.php"; ?>
</header>


<main>

<?php
include "menu.php";
?>

<div class="conteudo"><h2>Listagem de Produtos</h2><br></div>

        <div class='row upper-list'>
            <div class='col-1'>ID</div>
            <div class='col-2'>Nome</div>
            <div class='col-2'>Categoria</div>
            <div class='col-1'>Preço</div>
            <div class='col-1'>Desconto</div>
            <div class='col-2'>Imagem</div>
            <div class='col-3 div-botao2'>Opções</div>
        </div>
        <?php

$rs = $pdo->query("SELECT * FROM produto");
$rowCount = $rs->rowCount();

if ($rowCount != 0) {
while($row = $rs->fetch(PDO::FETCH_OBJ)){

$id = $row->id;   
$nome = $row->nome;
$categoria = $row->categoria;
$de = $row->de;
$por = $row->por;
$img = $row->img;

echo "

        <div class='row lista1'>
            <div class='col-1'>'$id'</div>
            <div class='col-2'>$nome</div>
            <div class='col-2'>$categoria</div>
            <div class='col-1'>$por</div>
            <div class='col-1'>$de</div>
            <div class='col-2'><img width='160' height='80px' src='img-produto/".$img."'></div>
            <div class='col-3 div-botao'><a href='edita-produto.php?id=".$id."' class='botao-editar'>Editar</a>
        <a href='funcao-modelo.php?funcao=delete&&tabela=produto&&id=".$id."&&volta=listagem-modelo' class='botao-apagar'>Apagar</a></div>
        </div>

";

} 
} else {
echo "Nenhum registro foi encontrado!";
}
?> 
</div>
    </main>
</body>
</html>