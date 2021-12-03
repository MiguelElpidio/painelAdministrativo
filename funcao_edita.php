<?php


include "../config.php";


/* EDITAR PRODUTO */ 
if($_GET['funcao']=="atualizaproduto"){

    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $de = $_POST['de'];
    $por = $_POST['por'];
    $id = $_POST['id'];
    
    try {

        $stmt = $pdo->prepare('UPDATE produto SET nome = :nome, categoria = :categoria, de = :de, por = :por WHERE id = :id');
        $stmt->execute(array(
        ':nome' => $nome,
        ':categoria' => $categoria,
        ':de' => $de,
        ':por' => $por,
        ':id' => $id
        ));
        echo "<script type='text/javascript'>alert('Atualização feita com sucesso!');</script>";
        echo "<script language='javascript' type='text/javascript'>window.location.href='listar_produto.php';</script>";
        }
        
        
        
        catch(PDOException $e){
        echo 'Error: ' . $e->getMessage();
        }
    
    }
?> 
