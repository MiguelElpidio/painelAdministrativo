<?php
include "../config.php";


/*tabela para adicionar produtos*/
if($_GET['funcao_cadastro']=="cadastroproduto"){

    $nome_produto = $_POST['nome_produto'];
    $categoria = $_POST['categoria'];
    $de = $_POST['de'];
    $por = $_POST['por'];
    $foto = $_FILES['arquivo']; 

    if($foto['type'] == 'image/jpeg'){
        
        
        require    ("funcao_redimensionar.php");
    $name = md5(uniqid(rand(), true)).".jpg";
    Redimensionar($foto, $name, 800, "img_produto");    
        
    $executa = $pdo->query("INSERT INTO produto VALUES (NULL,'$nome_produto','$categoria','$de','$por','$name')"); 
    if($executa){
 
    echo "<script type='text/javascript'>alert('Cadastro feito com sucesso!');</script>";
    echo "<script language='javascript' type='text/javascript'>window.location.href='listar_produto.php';</script>";
     
    }
    else{
    print_r($pdo->errorInfo());
    }
    }
    }


/*------------------------------------------- Se não atender nenhuma função ---------------------------------------*/
else {
    echo "<script type='text/javascript'>
    
    
    
    alert('Falha no envio, por favor. Tente novamente!');
    
    
    
    </script>";
    echo "<meta HTTP-EQUIV='refresh' CONTENT='1;URL=index.php'>";
    }

?>