<?php
    include "Cliente.php";
 
    $cliente = new Cliente();
 
    $cliente->setId(1);
    $cliente->setNome("Nome");
    $cliente->setEmail("nome@example.com");
 
    echo "<br>ID: "     .$cliente->getId(). "\n";
    echo "<br>Nome: "   .$cliente->getNome(). "\n";
    echo "<br>Email: "  .$cliente->getEmail(). "\n";
 
    echo $cliente->conectar();
?>
