<?php
include('conn.php');
class Cadastros extends Conexao
{

    public function cadastraNovaFrase($usuario,$categoria,$frase)
    {   
       

        $pdo = parent::get_instace();
        $sql = "INSERT INTO postes (usuario,categoria,frases)values(:usuario,:categoria,:frases)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":usuario", $usuario);
        $sql->bindValue(":categoria", $categoria);
        $sql->bindValue(":frases", "$frase");

        $sql->execute();
        if ($sql->rowCount() > 0) {

            echo "<script>alert('Cadastrado Com Sucesso');window.location='../index.php?pag=posts'; </script>";
       
        } else {

            echo "<script>alert('Não Cadastrado ');window.location='../index.php?pag=posts'; </script>";
        
        }
    }
}
