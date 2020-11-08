<?php
include_once("conexao.php");
$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "SELECT * FROM usuarios WHERE profissao LIKE '%$filtro%' ORDER BY nome";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta);

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
            <h1>Sistema de consultas</h1>
            <hr><br>

            <form method="get" action="">
                Filtrar por profissão: <input type="text" name="filtro" class="campo" required autofocus>
                <input type="submit" value="pesquisar" class="btn">
            </form>

            <?php
            echo "Resultado da pesquisa com a palavra <strong>$filtro</strong><br><br>";

            echo "$registros registros encontrados.";

            echo "<br><br>";

            while ($exibirRegistros = mysqli_fetch_array($consulta)) {

                $userId = $exibirRegistros['0'];
                $nome = $exibirRegistros['1'];
                $email = $exibirRegistros['2'];
                $profissao = $exibirRegistros['3'];

                echo "<article>";

                echo "$userId<br>";
                echo "$nome<br>";
                echo "$email<br>";
                echo "$profissao<br>";

                echo "</article>";
            }

            mysqli_close($conexao);

            

            ?>


        </section>
   
    </div>
</body>
</html>