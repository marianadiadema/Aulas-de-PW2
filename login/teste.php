<?php
include 'Contato.class.php';
$contato = new Contato();
$contato -> setNome("Pahblo");
$contato -> setEmail("durinhodematar7@gmail.com");
$contato -> setSenha("6969");

echo"<h2>Nome: ".$contato -> getNome()."<br>";
echo "Email: ".$contato -> getEmail()."<br>";
echo "Senha: ".$contato -> getSenha()."<br>";