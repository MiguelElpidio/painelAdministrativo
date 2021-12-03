<?php
//Include
include "../config.php";


if ($_GET['funcao'] == "cadastroproduto") {

$nome=$_POST['nome'];
$title= strtolower('$nome');
$title = str_replace(' ', '', $title);
$foto= $_FILES['foto'];
$preco= $_POST['preco'];
$qtd= $_POST['qtd'];
$descricao= $_POST['descricao'];

if($foto['type'] == 'image/jpeg' ){

    require ("funcao_redimensionar.php");
    $name = md5(uniqid(rand(), true)).".jpg";
    Redimensionar($foto, $name, 700, "img_produto");
    

    $executa = $pdo->query("INSERT INTO produtos VALUES (NULL, '$nome','$title','$name','$preco','$qtd','$descricao')");

    if ($executa) {
         echo "<script type='text/javascript'>alert('Cadastro feito com sucesso!');</script>";
         echo "<script language='javascript' type='text/javascript'>window.location.href = 'lista_produto.php';</script>";

    } else {
        print_r($pdo->errorInfo());

    }
}
}

//Cadastro de Dica
if ($_GET['funcao'] == "cadastrodicas") {

$titulo = $_POST['titulo'];
$texto = $_POST['texto'];


    $executa = $pdo->query("INSERT INTO dicas VALUES (NULL, '$titulo', '$texto')");

    if ($executa) {
        echo "<script type='text/javascript'>alert('Cadastro feito com sucesso!');</script>";

       echo "<script language='javascript' type='text/javascript'>window.location.href = 'lista_dica.php';</script>";

    } else {
        print_r($pdo->errorInfo());

    }
    }



/*Cadastro de usuario*/
if ($_GET['funcao'] == "cadastrousuario") {

   
    $email= $_POST['nome'];
	$email= $_POST['email'];
    $senha= $_POST['senha'];


    $executa = $pdo->query("INSERT INTO usuario VALUES (NULL,'', '$email','$senha' )");

    if ($executa) {
        echo "<script type='text/javascript'>alert('Cadastro feito com sucesso!');</script>";

        echo "<script language='javascript' type='text/javascript'>window.location.href = 'listar_usuario.php';</script>";

    } else {
        print_r($pdo->errorInfo());

    }

}

/*Atualizar Usuario*/
if ($_GET['funcao'] == "atualizausuario") {


    $nome= $_POST['nome'];
    $email= $_POST['email'];
    $senha= $_POST['senha'];
    $id = $_POST['id'];

    try {
        $stmt = $pdo->prepare('UPDATE usuario SET nome = :nome, email = :email, senha = :senha WHERE id = :id');
        $stmt->execute(array(
            ':nome' => $nome,
            ':email' => $email,
            ':senha' => $senha,
            ':id' => $id

        ));
        echo "<script type='text/javascript'>alert('Atualização feita com sucesso!');</script>";
        echo "<script language='javascript' type='text/javascript'>window.location.href='lista_usuario.php';</script>";
    }



    catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

/*Atualizar dica*/
if ($_GET['funcao'] == "atualizadicas") {


    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $id = $_POST['id'];

    try {
        $stmt = $pdo->prepare('UPDATE dicas SET titulo = :titulo , texto = :texto WHERE id = :id');
        $stmt->execute(array(
            ':titulo' => $titulo,
            ':texto' => $texto,
            ':id' => $id

        ));
        echo "<script type='text/javascript'>alert('Atualização feita com sucesso!');</script>";
        echo "<script language='javascript' type='text/javascript'>window.location.href='lista_dica.php';</script>";
    }



    catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}



/*Atualizar produto*/
if ($_GET['funcao'] == "atualizaprodutos") {

    $nome=$_POST['nome'];
    $title= strtolower($nome);
    $title = str_replace(' ', '', $title);
    $preco= $_POST['preco'];
    $qtd= $_POST['qtd'];
    $descricao= $_POST['descricao'];
    $id= $_POST['id'];
    
   
    

        try {
            $stmt = $pdo->prepare('UPDATE produtos SET nome = :nome , title = :title,  preco = :preco, qtd = :qtd, descricao = :descricao WHERE id = :id');
            $stmt->execute(array(
                ':nome' => $nome,
                ':title' => $title,
                ':preco' => $preco,
                ':qtd' => $qtd,
                ':descricao' => $descricao,
                ':id' => $id
    
            ));
            echo "<script type='text/javascript'>alert('Atualização feita com sucesso!');</script>";
            echo "<script language='javascript' type='text/javascript'>window.location.href='lista_produto.php';</script>";
        }
    
    
        catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
  
}



/*Função Delete*/
if ($_GET['funcao'] == "delete") {


    $table = $_GET['tabela'];
    $volta = $_GET['volta'];
    $id = $_GET['id'];

    $sql = "DELETE FROM $table WHERE id = :id";
    $stmt = $pdo->prepare($sql); 
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    echo 
    "<script type='text/javascript'>alert('Registro excluído com sucesso!');</script>";
    echo 
    "<script language='javascript' type='text/javascript'>window.location.href='".$volta.".php';</script>";

}

?>