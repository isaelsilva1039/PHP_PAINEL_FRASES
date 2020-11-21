<?php 
// include('../backend/leitura_banco.php');
include('../backend/calss_cadasteos.php');

@$usuario   = $_POST['usuario'];
@$categoria = $_POST['categoria'];
@$frase     = $_POST['frase'];

echo $usuario."<br>";
echo $categoria."<br>";
echo $frase."<br>";

$cadastro = new Cadastros();
$cadastro->cadastraNovaFrase($usuario,$categoria,$frase);


?>