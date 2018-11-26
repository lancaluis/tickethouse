<?php
    require 'database.php';
  
    if (!empty($_POST)) {

        $usuario = $_POST['user'];
        $senha = $_POST['senha'];


        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM usuarios where usuario = ? AND senha = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($usuario,$senha));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();

        if(isset($data['id'])){

             //Session start
             session_start();
             $_SESSION["usuario"] = $data['usuario'];
             $_SESSION["email"] = $data['email'];
             $_SESSION["cpf"] = $data['cpf'];
             $_SESSION["id"] = $data['id'];


            header("Location: ../meusingressos.php");
        }else{
            header("Location: ../login.php");
        }

       
    }
     

       
    
?>