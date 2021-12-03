<?php 

include "../config.php";

if($_GET['funcao']=="addcategoria"){

$nome = $_POST['nome'];

    $executa = $pdo->query("INSERT INTO categoria VALUES (NULL, '$nome')");

if($executa){

echo "<script type='text/javascript'>alert('Cadastro feito com sucesso!');</script>";

echo "<script language='javascript' type='text/javascript'>window.location.href='lista-categoria.php';</script>";
}
else {
    echo "<script type='text/javascript'>
    
    alert('Função não encontrada, por favor tente novamente!');
    
    </script>";
    echo "<meta HTTP-EQUIV='refresh' CONTENT='1;URL=index.php'>";
}
}

?>