<?php

$host = "localhost";
$user = "root";
$passwd = "";
$db = "cadastro";

$conexao = mysqli_connect($host, $user, $passwd, $db);

if(!$conexao){
    echo "Ooops! Falha ao conectar.";
}
?>