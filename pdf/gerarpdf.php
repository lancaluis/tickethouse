<?php 
 include("mpdf60/mpdf.php");
 
 session_start();
 include '../php/database.php';
 
 $pdo = Database::connect();
 $sql = 'SELECT I.id, E.nome, E.data, E.valor FROM eventos E INNER JOIN ingressos I ON i.id = e.id INNER JOIN usuarios U ON u.id = i.id_usuario WHERE i.id = '.$_GET["id"];
 $q = $pdo->prepare($sql);
 $q->execute(array($usuario,$senha));
 $data = $q->fetch(PDO::FETCH_ASSOC);
 Database::disconnect();

 $dataFormatada = date_format(date_create($data['data']), 'd/m/y');

 $html = "
 <fieldset>
 <h1>Ingresso</h1>
 <p class='center sub-titulo'>
 Evento: <strong>".$data["nome"]."</strong>
 Nº <strong>0021842</strong>
 </p>
 <p class='justificado'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat vestibulum tellus, sit amet tincidunt leo euismod quis. Aenean hendrerit dui leo, sodales condimentum tellus vulputate at. Maecenas eu sapien placerat, pretium sem eu, luctus velit. Praesent vel arcu vel erat euismod vehicula sit amet nec elit. Proin sollicitudin erat justo, at faucibus purus ultrices sed. Ut ac condimentum odio, lobortis pharetra sapien.</p>
 <p>...............................................................................................................................................</p>
 <p>Nome: <strong>".$_SESSION["usuario"]."</strong></p>
 <p>CPF: <strong>".$_SESSION["cpf"]."</strong></p>
 <p>Valor: <strong>R$".$data["valor"]."</strong></p>
 Data: <strong>$dataFormatada</strong></p>
 </fieldset>
 ";

 $mpdf=new mPDF(); 
 $mpdf->SetDisplayMode('fullpage');
 $css = file_get_contents("css/estilo.css");
 $mpdf->WriteHTML($css,1);
 $mpdf->WriteHTML($html);
 $mpdf->Output();

 exit;