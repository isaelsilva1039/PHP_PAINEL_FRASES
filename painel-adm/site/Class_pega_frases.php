<?php
include_once('../backend/conn.php');

class Frases extends Conexao
{
    public $msg;

    public function mostrasPosts()
    {

        $pdo = parent::get_instace();
        $sql = "SELECT * FROM postes";
        $sql = $pdo->prepare($sql);
        $sql->execute();
        if ($sql->rowCount() > 0) {

            return $sql->fetchAll();
        } else {
            echo "SEM RESULTADOS ";
        }
    }
}
