<?php
include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];

$sql = "INSERT INTO usuarios (nome,email,profissao) VALUES ('$nome', '$email', '$profissao')";
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);


mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de cadastro</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <div class="container">
        <nav>
            <ul class="menu">
                <a href="index.php"><li>Cadastro</li></a>
                <a href="consultas.php"><li>Consultas</li></a>
            </ul>
        </nav>

        <section>
            <br><hr>
            <h1>Sistema de cadastro</h1>
            <hr><br>

            <?php

            if ($linhas == 1) {
                echo "Ebaaa! Seu cadastro foi feito com sucesso :D";
            } else {
                echo "Ooops! Esse email já está cadastrado no sistema.";
            }

            ?>

        </section>
   
    </div>
</body>
</html>