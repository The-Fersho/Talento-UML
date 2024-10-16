<?php

//Definir directorio separador
define('DS', DIRECTORY_SEPARATOR);

// Definir la ruta de la raíz
define('ROOT_PATH', realpath(dirname(__FILE__) . '/../../'));

// Definir el nombre de una carpeta para determinar la redireccion

define('APP_FOLDER', 'feria_uml');

// Definir la URL de la raíz, using native PHP functions
define('ROOT_URL', '//' . $_SERVER['HTTP_HOST'] .'/'.  APP_FOLDER.  '/');