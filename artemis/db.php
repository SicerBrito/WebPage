<?php

//!Constantes globales para la cadena de conexion desde php hacia el motor de base de datos.

//Definimos las constantes
if (!defined("DB_TYPE")){
    define("DB_TYPE","mysql"); // Aquí debes colocar el tipo de tu base de datos
}

if (!defined("DB_HOST")){
    define("DB_HOST","localhost"); // Aquí debes colocar el host de tu base de datos
}

if (!defined("DB_NAME")){
    define("DB_NAME","WebPage"); // Aquí debes colocar el nombre de tu base de datos
}

if (!defined("DB_USER")){
    define("DB_USER","campus"); // Aquí debes colocar el usuario de tu base de datos
}

if (!defined("DB_PWD")){
    define("DB_PWD","campus2023"); // Aquí debes colocar la contarseña de tu base de datos
}


?>