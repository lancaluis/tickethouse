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
    <?php 
        include('php/layout/header.php');
    ?>

    <!-- CONTEÚDO PRINCIPAL -->
    <div class="container">

        <div id="login">

            <div id="logo">
                <img src="imgs/logo.png" alt="">
            </div>

            <div id="form">
                <form action="php/cadastrar.php" method="POST">
                    <input type="text" name="user" id="user" placeholder="Usuário"></br>
                    <input type="password" name="senha" id="senha" placeholder="Senha"></br>
                    <input type="text" name="cpf" id="cpf" placeholder="CPF"></br>
                    <input type="email" name="email" id="email" placeholder="E-mail"></br>
                    <input type="submit" value="CADASTRAR">
                </form>
            </div>

        </div>

    </div>

    <?php 
        include('php/layout/footer.php');
    ?>

</body>

</html>