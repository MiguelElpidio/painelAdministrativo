<!DOCTYPE html>
<html lang="pt">
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php include "config-modelo.php"; ?>
    <link rel="stylesheet" href="style-listagem.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem Modelo</title>
</head>
<body>
    <main>
<div class="conteudo"><h2>Listagem de Produtos</h2><br></div>

        <div class='row list2'>
            <div class='col-1'>Item</div>
            <div class='col-1'>ID</div>
            <div class='col'>Nome</div>
            <div class='col-1'>Categoria</div>
            <div class='col-1'>Preço</div>
            <div class='col-1'>Desconto</div>
            <div class='col-2'>Imagem</div>
            <div class='col'>Opções</div>
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

        <div class='row list1'>
            <div class='col-1'>Alvo</div>
            <div class='col-1'>'$id'</div>
            <div class='col'>$nome</div>
            <div class='col-1'>$categoria</div>
            <div class='col-1'>$por</div>
            <div class='col-1'>$de</div>
            <div class='col-2'><img width='160' height='80px' src='img-produto/".$img."'></div>
            <div class='col'><a href='edita-produto.php?id=".$id."' class='editar'>Editar</a>
        <a href='funcao-modelo.php?funcao=delete&&tabela=produto&&id=".$id."&&volta=listagem-modelo' class='apagar'>Apagar</a></div>
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