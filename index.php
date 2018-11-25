<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket House - Eventos é com a gente!</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body>

    <?php 
        include('php/layout/header.php');
    ?>

    <!-- CONTEÚDO PRINCIPAL -->
    <div class="container">

        <!-- BANNERS -->
        <div id="main_banner"></div>

        <div id="eventos_regiao">
            <h3>eventos na sua região</h3>
            <div id="lista_eventos"></div>
            <div id="calendario"></div>
        </div>

        <!-- PRÓXIMOS EVENTOS -->
        <section id="proximos_eventos">
            <div class="evento">
                <h3>JundTech DAY</h3>
                <h1>21</h1>
                <h2>outubro</h2>
                <button>Acessar</button>
            </div>
            <div class="evento">
                <h3>Angra Fest</h3>
                <h1>08</h1>
                <h2>agosto</h2>
                <button>Acessar</button>
            </div>
            <div class="evento">
                <h3>Rock in Rio</h3>
                <h1>09</h1>
                <h2>julho</h2>
                <button>Acessar</button>
            </div>
            <div class="evento">
                <h3>Viveri Talks</h3>
                <h1>14</h1>
                <h2>março</h2>
                <button>Acessar</button>
            </div>
            <div class="evento">
                <h3>Nerzão #1</h3>
                <h1>31</h1>
                <h2>dezembro</h2>
                <button>Acessar</button>
            </div>
        </section>

    </div>

    <?php 
        include('php/layout/footer.php');
    ?>
    
<script src="js/calendar.js"></script>
</body>

</html>