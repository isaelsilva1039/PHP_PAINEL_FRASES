<?php
session_start();;

session_destroy();
echo $_SESSION['idUsuario'];
header("LOCATION: ../../index.php ");

