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
        
        <h3>Adicionar Usuário</h3>

        <form action="funcao.php?funcao=cadastrousuario" method="post" enctype="multipart/formdata" >

        <div class='form-floating mb-3'>
       <input name='nome' type='text' class='form-control' id='floatingInput'>
       <label for='floatingInput'>Nome</label>
        </div>
        <div class="form-floating mb-3">
       <input name="email" type="email" class="form-control" id="floatingInput">
       <label for="floatingInput">Email</label>
        </div>

           <div class="form-floating mb-3">
          <input name="senha" type="password" class="form-control" id="floatingPassword" >
          <label for="floatingPassword">Senha</label>
          </div>

          <br>

         <input class="btn btn-primary" type="submit" value="Adicionar">
         </form>

      
        </div>

    

        

    




</main>


</body>
</html>