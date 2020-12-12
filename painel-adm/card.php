<?php
require_once('../painel-adm/backend/cads.php');
$cads = new Cads();


?>

<!DOCTYPE html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" cont ent="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
<!-- Custom CSS -->
<link href="../css/style.css" rel="stylesheet">
<link href="../css/cssmanipulado" rel="stylesheet">
<link href="relatorios.css" rel="stylesheet">
<html>

<nav>
    <div class="cad">
        <div class="label">
            Qtd meus post
            <hr>
            <div class="numero">

                <?php

                foreach ($lei->usuarioLogado() as $usuario) {
                    $usuario = $usuario["nome"];
                }
                echo $cads->quantidadePostes($usuario);
                ?>
                <i class="mdi mdi-cash-multiple"></i>
            </div>
        </div>
    </div>
    <div class="cad1">
        <div class="label1">
            Qtd Postado
            <hr>
            <div class="numero1">
                <?php
                echo  $cads->quantidadePostesTotal() ?>
            </div>
        </div>
    </div>


    <div class="cad2">
        <div class="label2">
            Qtd Acesso
            <hr>

            <div class="numero2">
                36
            </div>
        </div>
    </div>


    <div class="cad3">
        <div class="label3">
            Qtd Apagados
            <hr>

            <div class="numero3">
                50
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br>
    <div>
        <hr class="linha">
    </div>

</nav>


<style>
    

    .label {
        color: orangered;
        margin-left: 20px;
        bottom: 10px;
    }

    .numero {
        margin-left: 150px;
        font-size: x-large;
    }

    .label1 {
        color: green;
        margin-left: 20px;
        bottom: 10px;
    }

    .numero1 {
        margin-left: 150px;
        font-size: x-large;
    }


    .label2 {
        color: blue;
        margin-left: 20px;
        bottom: 10px;
    }

    .numero2 {
        margin-left: 150px;
        font-size: x-large;
    }


    .label3 {
        color: navy;
        margin-left: 20px;
        bottom: 10px;
    }

    .numero3 {
        margin-left: 150px;
        font-size: x-large;
    }


    .cad {
        float: left;
        margin: 9px;
        background: white;
        height: 120px;
        width: 250px;
        color: black;
        -webkit-box-shadow: 0px 3px 5px 0px rgba(184, 175, 184, 1);
        -moz-box-shadow: 0px 3px 5px 0px rgba(184, 175, 184, 1);
        box-shadow: 0px 3px 5px 0px rgba(184, 175, 184, 1);
        border-left: orangered 6px solid;
        border-radius: 8px;
    }

    .cad1 {
        float: left;
        margin: 9px;
        background: white;
        height: 120px;
        width: 250px;
        color: black;
        -webkit-box-shadow: 0px 3px 5px 0px rgba(184, 175, 184, 1);
        -moz-box-shadow: 0px 3px 5px 0px rgba(184, 175, 184, 1);
        box-shadow: 0px 3px 5px 0px rgba(184, 175, 184, 1);
        border-left: green 6px solid;
        border-radius: 8px;
    }

    .cad2 {
        float: left;
        margin: 9px;
        background: white;
        height: 120px;
        width: 250px;
        color: black;
        -webkit-box-shadow: 0px 3px 5px 0px rgba(184, 175, 184, 1);
        -moz-box-shadow: 0px 3px 5px 0px rgba(184, 175, 184, 1);
        box-shadow: 0px 3px 5px 0px rgba(184, 175, 184, 1);
        border-left: blue 6px solid;
        border-radius: 8px;
    }

    .cad3 {
        margin: 9px;
        float: left;
        background: white;
        height: 120px;
        width: 250px;
        color: black;
        -webkit-box-shadow: 0px 3px 5px 0px rgba(184, 175, 184, 1);
        -moz-box-shadow: 0px 3px 5px 0px rgba(184, 175, 184, 1);
        box-shadow: 0px 3px 5px 0px rgba(184, 175, 184, 1);
        border-left: navy 6px solid;
        border-radius: 8px;
    }
</style>

</html>