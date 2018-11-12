<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket House - Eventos é com a gente!</title>
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body>

    <!-- CABEÇALHO -->
    <header>

            <img class="logo" src="imgs/logo.png" alt="logo">

        <nav>
            <a href="meusingressos.php"><i class="fas fa-ticket-alt"></i>meus ingressos</a>
            <a href="index.php"><i class="fas fa-plus"></i>criar evento</a>
            <a href="categorias.php"><i class="fas fa-caret-down"></i>categorias</a>
            <a href="index.php"><i class="fas fa-home"></i>home</a>
        </nav>
    </header>

    <!-- CONTEÚDO PRINCIPAL -->
    <div class="container">

        <div id="login">

            <div id="logo">
                <img src="imgs/logo.png" alt="">
            </div>

            <div id="form">
                <form action="cadastrar.php">
                    <input type="text" name="user" id="user" placeholder="Usuário"></br>
                    <input type="password" name="senha" id="senha" placeholder="Senha"></br>
                    <input type="text" name="cpf" id="cpf" placeholder="CPF"></br>
                    <input type="email" name="email" id="email" placeholder="E-mail"></br>
                    <input type="submit" value="CADASTRAR">
                </form>
            </div>

        </div>

    </div>

    <!-- RODAPÉ -->
    <footer>
        <div id="social_media">
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
        </div>
        <p>Copyright &copy; 2018 - Ticket House</p>
    </footer>

</body>

</html>