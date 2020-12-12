<?php
include('../painel-adm/backend/cads.php');
$objCars = new Cads();
$id      = $_POST['id'];
$get     =  $_POST['pesquisa'];
$limit   =  $_POST['limit'];
$objCars->palavrapesquisa = $get;
$objCars->limitado = $limit;
$objCars->idApagar = $id;
session_start();
$objCars->apagarFrases();
if (isset($_SESSION['apagado'])) {
    echo $_SESSION['apagado'];
    echo "<meta HTTP-EQUIV='refresh' CONTENT='003'>";
    unset($_SESSION['apagado']);
}
?>


<html>
<link href="../Ico/Font/Reference.html" rel="stylesheet">
<link rel="stylesheet" href="../ico/Font/demo-files/demo.css">
<form method="POST" action="index.php?pag=meus_postes">
  <div>
    <input type="text" name="pesquisa" class="pesquisa"></input>
    <select name="limit" class="pesquisa">
      <option>10</option>
      <option>20</option>
      <option>30</option>
      <option>50</option>
    </select>
  </div>
  <input type="submit" value="pesquisa" class="btn_pesquisa"></input>
  <div>
  </div>
</form>

<table class="table table-bordered sombra">
  <?php


  foreach ($lei->usuarioLogado() as $usuario) {
    $usuario = $usuario["nome"];
  }


  ?>
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Usuario</th>
      <th scope="col">Categoria</th>
      <th scope="col">Frases</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <?php

  foreach ($objCars->meusPostes($usuario) as $meuspostesporusuario) :
  ?>
    <tbody>
      <tr>
        <th scope="row"><?php echo $id = $meuspostesporusuario['id'] ?></th>
        <td><?php echo $meuspostesporusuario['usuario'] ?></td>
        <td><?php echo $meuspostesporusuario['categoria'] ?> </td>
        <td><?php echo $meuspostesporusuario['frases'] ?></td>
        <td>
          <form method="POST" action="index.php?pag=meus_postes" style="float: right;">
            <button class="x" name="id" value="<?php echo $meuspostesporusuario['id'] ?> "> <span class="icon icon-bin ico_cancel"></span></button>
          </form>
          <span class="icon icon-pencil ico_edita"></span>
        </td>
      </tr>

    <?php endforeach ?>

    </tbody>

    <style>
      .x {
        background: white;
        border: 0px solid white;
      }

      .pesquisa {
        float: left;
        margin: 9px;
        background: white;
        color: black;
        -webkit-box-shadow: 0px 3px 5px 0px rgba(184, 175, 184, 1);
        -moz-box-shadow: 0px 3px 5px 0px rgba(184, 175, 184, 1);
        box-shadow: 0px 3px 5px 0px rgba(184, 175, 184, 1);
        border: orangered 1px solid;
        border-radius: 8px;
      }

      .btn_pesquisa {

        float: left;
        margin: 9px;
        background: orangered;
        color: white;
        width: 100px;
        -webkit-box-shadow: 0px 3px 5px 0px rgba(184, 175, 184, 1);
        -moz-box-shadow: 0px 3px 5px 0px rgba(184, 175, 184, 1);
        box-shadow: 0px 3px 5px 0px rgba(184, 175, 184, 1);
        border-radius: 8px;
      }

      .sombra {
        float: left;
        margin: 9px;
        background: white;
        color: black;
        -webkit-box-shadow: 0px 3px 5px 0px rgba(184, 175, 184, 1);
        -moz-box-shadow: 0px 3px 5px 0px rgba(184, 175, 184, 1);
        box-shadow: 0px 3px 5px 0px rgba(184, 175, 184, 1);
        border-left: orangered 6px solid;
        border-radius: 8px;
      }

      .ico_cancel {
        color: red;
        margin: 5px;
      }

      .ico_edita {
        color: green;
      }
    </style>
</table>