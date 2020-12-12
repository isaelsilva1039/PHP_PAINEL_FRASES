<?php

class Cads extends Conexao
{
    public $limitado = '';
    public $palavrapesquisa = '';
    public $idApagar='';
    public $menssagem;

    public function quantidadePostes($usuariosessao)
    {
        $pdo = parent::get_instace();
        $sql = "SELECT * FROM postes  where  usuario = :usuario ";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":usuario", $usuariosessao);
        $sql->execute();
        return $sql->rowCount();
    }

    public function quantidadePostesTotal()
    {
        $pdo = parent::get_instace();
        $sql = "SELECT * FROM postes";
        $sql = $pdo->prepare($sql);
        $sql->execute();
        return $sql->rowCount();
    }

    public function meusPostes($usuariosessao)
    {

        if ($this->limitado === null) {
            $pdo = parent::get_instace();
            $sql = "SELECT * FROM postes  where  usuario = :usuario   order by id desc LIMIT  10 ";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":usuario", $usuariosessao);
            $sql->execute();
            return $sql->fetchAll();
        }

        if ($this->palavrapesquisa === empty("") || $this->palavrapesquisa === '') {

            $pdo = parent::get_instace();
            $sql = "SELECT * FROM postes  where  usuario = :usuario   order by id desc LIMIT  $this->limitado ";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":usuario", $usuariosessao);
            $sql->execute();
            return $sql->fetchAll();
        } else {
            $pdo = parent::get_instace();
            $sql = "SELECT * FROM postes  where categoria LIKE '%" . $this->palavrapesquisa . "%' or id LIKE '%" . $this->palavrapesquisa . "%'  and usuario = :usuario  order by id desc LIMIT  $this->limitado ";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":usuario", $usuariosessao);
            $sql->execute();
            return $sql->fetchAll();
        }
    }

    public function apagarFrases()
    {
        $pdo = parent::get_instace();
        $sql = " DELETE  FROM postes where id = :id ";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":id", $this->idApagar);
        $sql->execute();
        if($sql->rowCount() > 0){
            session_start();
            return $_SESSION['apagado'] = '<br> <p class="alert alert-success d-flex justify-content-center"> Apagado com sucesso! </p>';

            //   return header("Location : index.php?pag=meus_postes");
        }
    
    }
}
