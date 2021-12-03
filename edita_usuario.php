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
       

<?php


$id = $_GET["id"];

$rs = $pdo->query("SELECT * FROM usuario Where id = $id");

$row = $rs->fetch(PDO::FETCH_OBJ);


$email = $row->email;
$senha = $row->senha;


?>
 <div class="conteudo">
        
        <h3>Editar Usuário</h3>

<form action="funcao.php?funcao=atualizausuario" method="post" enctype="multipart/formdata" >


     <div class="form-floating mb-3">
     <input name="email" value="<?php echo $email;?>" type="email" class="form-control" id="floatingInput">
     <label for="floatingInput">Usuario</label>
     </div>

     <div class="form-floating">
     <input name="senha" value="<?php echo $senha;?>" type="password" class="form-control" id="floatingPassword">
     <label for="floatingPassword">Senha</label>
     </div>

         <input class="btn btn-primary" type="submit" value="Atualizar">
         <input type="hidden" value="<?php echo $id;?>" name="id">

</form>

      
        </div>

    

        

    




</main>


</body>
</html>