<?php
    session_start();
?>
 
 <!-- CABEÇALHO -->
 <header>
       
       <img class="logo" src="imgs/logo.png" alt="logo">
      
       <nav>
           <?php
            if(!isset($_SESSION['usuario'])){
                echo '<a href="login.php"><i class="fas fa-ticket-alt"></i>Entrar</a>';
            }else{
                echo'<a href="php/logout.php"><i class="fas fa-sign-out-alt"></i>Sair</a>';
                echo'<a href="meusingressos.php"><i class="fas fa-ticket-alt"></i>Meus Ingressos</a>'; 
            }
            
           ?>
          
           <a href="#"><i class="fas fa-plus"></i>criar evento</a>
           <a href="categorias.php"><i class="fas fa-caret-down"></i>categorias</a>
           <a href="index.php"><i class="fas fa-home"></i>home</a>
       </nav>
</header>