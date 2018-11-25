<?php
    session_start();
    $helper = array_keys($_SESSION);
    foreach ($helper as $key){
        unset($_SESSION[$key]);
    }
    session_destroy();
    header("Location: ../index.php");

?>