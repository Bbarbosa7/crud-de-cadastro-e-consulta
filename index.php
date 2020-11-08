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
            <h1>Cadastro de Usuários</h1>
            <hr><br><br>

            <form method="post" action="processa.php">
                
                Nome:<br>
                <input type="text" name="nome" class="campo" maxlength="40" placeholder="Digite seu nome completo" required autofocus><br>
                Email:<br>
                <input type="email" name="email" class="campo" maxlength="50" placeholder="Digite seu email" required><br>
                Profissão:<br>
                <input type="text" name="profissao" class="campo" maxlength="40" placeholder="Informe sua profissão" required>
                <br><br>

                <input type="submit" value="salvar" class="btn">
                <input type="reset" value="limpar" class="btn">
                


            </form>
        </section>
    </div>

    <script src="js.js"></script>

</body>
</html>