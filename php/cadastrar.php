<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
    
        $usuarioError = null;
        $senhaError = null;
        $cpfError = null;
        $emailError = null;

        $usuario = $_POST['user'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
         
     
        $valid = true;
        if (empty($usuario)) {
            $usuarioError = 'Por favor, preencha o campo usuario';
            $valid = false;
        }
        if (empty($senha)) {
            $senhaError = 'Por favor, preencha o campo senha';
            $valid = false;
        } 
        if (empty($cpf)) {
            $cpfError = 'Por favor, preencha o campo CPF';
            $valid = false;
        }
        if (empty($email)) {
            $emailError = 'Por favor, preencha o campo Email';
            $valid = false;
        }
         
     
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO usuarios (usuario,senha,cpf,email) values(?, ?, ?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($usuario,$senha,$cpf,$email));
            Database::disconnect();

            //Session start

            session_start();
            $_SESSION["usuario"]=$usuario;
            $_SESSION["email"]=$email;
            $_SESSION["cpf"] = $cpf;

            header("Location: ../meusingressos.php");

             
        }
    }
?>