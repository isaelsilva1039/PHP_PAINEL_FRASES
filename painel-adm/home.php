<?php
session_start();
include('backend/leitura_banco.php');
include('../painel-adm/controle/recebe_login.php');
$objet = new Leiturasbanco();

foreach ($lei->usuarioLogado() as $usuario ) {
    echo  $usuario["nome"];
 }
 echo "home";


?>