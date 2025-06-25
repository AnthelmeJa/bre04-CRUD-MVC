<?php 

    require __DIR__ . "/config/autoload.php";
    
    $routeur = new Routeur();
    $routeur->handleRequest($_GET);
    
    
?>