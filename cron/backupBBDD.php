<?php


include_once  dirname(__DIR__) . '/vendor/autoload.php';


use Cipriano\Core\conf\CiprianoConfig;
use Cose\persistence\PersistenceContext;
use Cipriano\Core\notificaciones\backupBBDD\BackupBBDD;

//inicializamos cuentas core.
CiprianoConfig::getInstance()->initialize();
CiprianoConfig::getInstance()->initLogger( dirname(__FILE__).  "/log4php.xml");

$persistenceContext =  PersistenceContext::getInstance();


$notificacion = new BackupBBDD();
$notificacion->send();

//cerramos la conexión a la base.
$persistenceContext->close();




?>
