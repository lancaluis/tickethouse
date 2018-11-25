<?php 
 include("mpdf60/mpdf.php");
session_start();
 $html = "
 <fieldset>
 <h1>Ingresso</h1>
 <p class='center sub-titulo'>
 Evento: <strong>JundTech DAY #1</strong>
 Nº <strong>000214875</strong>
 </p>
 <p class='justificado'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat vestibulum tellus, sit amet tincidunt leo euismod quis. Aenean hendrerit dui leo, sodales condimentum tellus vulputate at. Maecenas eu sapien placerat, pretium sem eu, luctus velit. Praesent vel arcu vel erat euismod vehicula sit amet nec elit. Proin sollicitudin erat justo, at faucibus purus ultrices sed. Ut ac condimentum odio, lobortis pharetra sapien.</p>
 <p>...............................................................................................................................................</p>
 <p>Nome: <strong>".$_SESSION["usuario"]."</strong></p>
 <p>CPF: <strong>".$_SESSION["cpf"]."</strong></p>
 <p>Valor: <strong>R$80,00</strong></p>
 Data: <strong>30/11/18</strong></p>
 </fieldset>
 ";

 $mpdf=new mPDF(); 
 $mpdf->SetDisplayMode('fullpage');
 $css = file_get_contents("css/estilo.css");
 $mpdf->WriteHTML($css,1);
 $mpdf->WriteHTML($html);
 $mpdf->Output();

 exit;