<?php
include('config.php');

class Conexao
{
    public static $instace;
    public function get_instace()
    {
        if (!isset(self::$instace)) {
            self::$instace = new PDO("mysql:dbname=mundofrases;host=localhost", "root", "");
        }
        return self::$instace;
    }
}

try {
    $conn = new  PDO("mysql:dbname=$banco;host=$servidor", $usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
};
