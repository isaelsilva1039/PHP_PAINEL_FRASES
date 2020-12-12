<?php 
// include'recebe_login.php';
session_start();
echo $_SESSION['idUsuario'];

if(!isset($_SESSION['idUsuario'])){
    header("location: ../../index.php?login='Usuario não logado' ");
}

?>
