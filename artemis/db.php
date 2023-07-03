<?php

//!Constantes globales para la cadena de conexion desde php hacia el motor de base de datos.

//Definimos la constante
if (!defined("DB_TYPE")){
    difine("DB_TYPE","mysql");
}

if (!defined("DB_HOST")){
    difine("DB_HOST","localhost");
}

if (!defined("DB_NAME")){
    difine("DB_NAME","database");
}

if (!defined("DB_USER")){
    difine("DB_USER","campus");
}

if (!defined("DB_PWD")){
    difine("DB_PWD","campus2023");
}


?>