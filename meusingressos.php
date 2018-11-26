
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket House - Eventos é com a gente!</title>
    <link rel="stylesheet" href="css/meusingressos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body>

    <?php 
        include('php/layout/header.php');
    ?>

    <!-- CONTEÚDO PRINCIPAL -->
    <div class="container">

        <div id="menu">
            <i class="fas fa-user"></i>
            <h2>Olá, <?php echo $_SESSION["usuario"];?></h2>
            <p><a href="meusingressos.php">Meus ingressos</a></p>
            <p><a href="perfil.php">Perfil</a></p>
        </div>

        <div id="ingressos">

        <h1>MEUS INGRESSOS</h1>
        
            <table>

                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Data</th>
                        <th>Ingresso</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                        
                        include 'php/database.php';
                        $pdo = Database::connect();
                        $sql = 'SELECT I.id, E.nome, E.data FROM eventos E INNER JOIN ingressos I ON i.id = e.id INNER JOIN usuarios U ON u.id = i.id_usuario WHERE u.id ='.$_SESSION["id"];
        
                        foreach ($pdo->query($sql) as $row) {
                           
                            $dataFormatada = date_format(date_create($row['data']), 'd/m/y');
                            echo '<tr>';
                            echo '<td>'. $row['nome'] . '</td>';
                            echo '<td>'. $dataFormatada . '</td>';
                            echo '<td><a href="pdf/gerarpdf.php?id='.$row['id'].'">IMPRIMIR</a></td>';
                            echo '</tr>';
                        }
                        Database::disconnect();
                    
                    ?>
                  
                </tbody>

            </table>

        </div>
    </div>

    <?php 
        include('php/layout/footer.php');
    ?>