<!DOCTYPE html>
<html lang="pt">
<head>

<?php include "head.php"?>;

</head>
<body>

<header>
   <div class="topo">
        <div class="row">
        <div class="col">
    <h4 class="painel">Painel de controle</h4>
         </div>
    <div class="col">
    <span class="bemvindo">Seja bem vindo Adiministrador</span> 
    
    <a class="sair" href="logout.php">Sair</a>
    </div>

    </div>
    </div>
    
    

</header>


<main>
     
     <?php
     include "menu.php";
     ?>   
       
        
     

    <div class="conteudo">
        
        <h3>Listar Categorias</h3>

        <?php
//SELECT 02 - CRIAR LISTAGENS



$rs = $pdo->query("SELECT * FROM categoria");
$rowCount = $rs->rowCount(); //Quantidade de registros




if ($rowCount != 0) {
while($row = $rs->fetch(PDO::FETCH_OBJ)){
$id = $row->id;
$nome = $row->nome;



echo"

<div class='fts1'>
<div class='row'>
     <div class='col'>
        
      <p>".$id."</p>
     </div>
    <div class='col'>
           
        <p>".$nome."</p>
    </div>
    <div class='col'>
    <a class='btnr' href='funcao.php?funcao=delete&&tabela=categoria&&id=".$id."&&volta=lista_categoria'> Del </a>
    <a class='btng' href='edita_categoria.php?id=".$id."'>  Edi  </a>
    </div>
</div>
</div>

";

}// Fim do while
} else {
echo "Nenhum registro foi encontrado!";
}



?>




       

      

        </div>
        
     

    

        

    




</main>


</body>
</html>