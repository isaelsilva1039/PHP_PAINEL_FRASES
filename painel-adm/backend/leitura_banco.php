<?php
session_start();
include_once('conn.php');

class Leiturasbanco extends Conexao
{
    public $email;
    public $senha;
    public $idUsuario;


    public function pegacategotia()
    {
        $pdo = parent::get_instace();
        $sql = "SELECT * FROM categoriasfrases ";
        $sql = $pdo->prepare($sql);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            echo "Erro ";
        }
    }

    public function validaLogin($email, $senha)
    {
        $this->email = $email;
        $this->senha = $senha;
        $pdo = parent::get_instace();
        $sql = "SELECT * FROM usuarios Where email = :email and senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":email", $this->email);
        $sql->bindValue(":senha", $this->senha);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $dados = $sql->fetch();
            $_SESSION['idUsuario'] = $dados['id'];
            
            $_SESSION['logado'] = "sim";
            header("location: ../index.php");
        } else {
            header("location: ../../index.php?login='erro' ");
        }
    }

    
    public function usuarioLogado()
    {
        $pdo = parent::get_instace();
        $sql = "SELECT * From usuarios where id = $_SESSION[idUsuario] ";
        $sql = $pdo->prepare($sql);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return  $sql->fetchAll();
        } else {
            echo "Sem resultado";
            echo $_SESSION['idUsuario'];
        }
    }
}
