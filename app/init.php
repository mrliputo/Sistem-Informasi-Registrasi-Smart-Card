<?php

session_start();

spl_autoload_register(function($class){ 
  require_once 'Core/'.$class.'.php';
});

$urlStart          = strlen($_SERVER['DOCUMENT_ROOT']);
$GLOBALS['root']   = substr(__DIR__.'/../', $urlStart);
$GLOBALS['assets'] = $GLOBALS['root'].'resource/assets';
$GLOBALS['view']   = __DIR__.'/../resource/views/';
$GLOBALS['siakad_url'] = "http://localhost/Project/Kuliah/PPSI/Siakad/";

require_once "Routes.php";