<?php
session_start();
include('../backend/conn.php');
include('../backend/leitura_banco.php');
$lei = new Leiturasbanco();

@$email = $_POST['email'];
@$senha = $_POST['senha'];


    $sql =  $conn->query("SELECT * FROM usuarios Where email = '$email' and senha = '$senha'");
    $sql->execute();
        if ($sql->rowCount() > 0) {
            $dados = $sql->fetch();
            $id = $_SESSION['idUsuario'] = $dados['id'];      
           
            header("location: ../index.php");
        } else {
           header("location: ../../index.php?login='erro' ");
        }
