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
            <?php
                include 'php/database.php';
                $pdo = Database::connect();
                $sql = 'SELECT * FROM eventos ORDER BY id DESC';
                foreach ($pdo->query($sql) as $row) {
                   
                    $dataFormatada = date_format(date_create($row['data']), 'd/m/y');
                    echo '<div class="evento">';
                    echo '<h3>'. $row['nome'] . '</h3>';
                    echo '<h1>'. $dataFormatada . '</h1>';
                    echo '<button>Acessar</button>';
                    echo '</div>';
                }
                Database::disconnect();
            ?>
        </section>

    </div>

    <?php 
        include('php/layout/footer.php');
    ?>
    
<script src="js/calendar.js"></script>
</body>

</html>