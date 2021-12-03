<?php

include "../config.php";

if($_GET['funcao']=="delete"){

$id = $_GET ['id'];
$tabela = $_GET ['tabela'];
$volta = $_GET ['volta'];

$sql = "DELETE FROM $tabela WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
echo "<script type='text/javascript'>alert('Registro excluído com sucesso!');</script>";
echo "<script language='javascript' type='text/javascript'>window.location.href='".$volta.".php';</script>";

}
?>