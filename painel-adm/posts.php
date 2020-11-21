<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Isael Duarte">
</head>

<!-- Custom fonts for this template-->
<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="../css/sb-admin-2.min.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">

<link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<link rel="shortcut icon" href="../img/favicon0.ico" type="image/x-icon">
<link rel="icon" href="../img/logo-favicon.ico" type="image/x-icon">
<?php 
    
?>
<form method="POST" action="controle/rerebe_novafrase.php">
    <div class="pricipal-nova">
        <div class="form-group">
            <label for="exampleFormControlInput1">Usuario</label>
            <input type="Autor" class="form-control" name="usuario" id="exampleFormControlInput1"
             value="<?php $leituraBanco = new Leiturasbanco(); $leituraBanco->usuarioLogado();
             foreach ($lei->usuarioLogado() as $usuario ) {
                echo $usuario = $usuario["nome"];
             }
             ?>" 
             placeholder="Ex: Jorge Fonseca" disabled="">
             <input type="text" name="usuario"  
             value="<?php $leituraBanco = new Leiturasbanco(); $leituraBanco->usuarioLogado();
             foreach ($lei->usuarioLogado() as $usuario ) {
                echo $usuario = $usuario["nome"];
             }
             ?>" hidden>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Categoria</label>
            <select class="form-control"  name="categoria" id="exampleFormControlSelect1">
                <option selected hidden >categorias</option>
                <?php
                $leituraBanco = new Leiturasbanco();
                foreach ($leituraBanco->pegacategotia() as $categoria) :
                ?>
                    <option><?php echo $categoria['categorias'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1" >Digite aqui a sua Frase</label>
            <textarea class="form-control"  name="frase" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <input class="btn" type="submit" value="Cadastra" name="cadastra" > 
</form>
        
</div>
<style>
    .btn{
            background:orangered;
            color: white;
            
        }
    .btn :hover{
        background: red;
        color: white;
    }
</style>
</html>