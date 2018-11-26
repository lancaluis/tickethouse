<?php
    
    require 'database.php';
    session_start();

    if (!empty($_POST)) {
    

        $senhaError = null;

        $senha = $_POST['senha'];
      
     
        $valid = true;
     
        if (empty($senha)) {
            $senhaError = 'Por favor, preencha o campo senha';
            $valid = false;
        } 
        
         
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE usuarios set senha = ? WHERE id = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($senha,$_SESSION["id"]));
            Database::disconnect();

            header("Location: logout.php");
             
        }
    }
?>