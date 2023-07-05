<?php

//!Constantes globales para la cadena de conexion desde php hacia el motor de base de datos.

//Definimos la constante
if (!defined("DB_TYPE")){
    define("DB_TYPE","mysql");
}

if (!defined("DB_HOST")){
    define("DB_HOST","localhost");
}

if (!defined("DB_NAME")){
    define("DB_NAME","WebPage"); // Aquí debes usar el nombre de tu base de datos
}

if (!defined("DB_USER")){
    define("DB_USER","campus");
}

if (!defined("DB_PWD")){
    define("DB_PWD","campus2023");
}


?>