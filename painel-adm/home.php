<?php
session_start();
include('backend/leitura_banco.php');
include('../painel-adm/controle/recebe_login.php');

echo "home";

$objet = new Leiturasbanco();

foreach ($lei->usuarioLogado() as $usuario ) {
    echo  $usuario["nome"];
 }
 


?>