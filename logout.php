<?php

ob_start();
//INICIALIZA A SESSÃO
session_start();
//DESTRÓI AS SESSOES
unset($_SESSION['validacao']);
session_destroy();
//REDIRECIONA PARA A TELA DE LOGIN
echo "<script>location.href='../login.php';</script>";




?>