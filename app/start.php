<?php
ini_set('display_errors', 1);
// Constantes iniciales
define('ROOT', DIRECTORY_SEPARATOR);
define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);
define('PASS', 'Febrero.2012');

// Cargamos las clases iniciales
require_once 'libs/SQLiteDB.php';
require_once 'libs/Controller.php';
require_once 'libs/Application.php';
