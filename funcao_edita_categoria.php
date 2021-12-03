<?php
include "../config.php";


/*tabela para atualiza categoria*/
if($_GET['funcao']=="edita_categoria"){

    $nome = $_POST['nome'];
    $id = $_POST['id'];
    
    try {
        $stmt = $pdo->prepare('UPDATE categoria SET nome = :nome WHERE id = :id');
        $stmt->execute(array(
        ':nome' => $nome,
        ':id' => $id
        ));
        echo "<script type='text/javascript'>alert('Atualização feita com sucesso!');</script>";
        echo "<script language='javascript' type='text/javascript'>window.location.href='lista_categoria.php';</script>";
        
        }
        
        
        
        catch(PDOException $e){
        echo 'Error: ' . $e->getMessage();
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