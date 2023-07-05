<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['guardar'])){

    require_once("configuracion.php");

    $configuracion = new Config(null, $_POST['user'], $_POST['email'], password_hash($_POST['password'],PASSWORD_DEFAULT));

    $configuracion->insertData();

    echo "<script> alert('Los datos fueron guardados correctamente.'); document.location='./index.php'; </script>";



}

?>