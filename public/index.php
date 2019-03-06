<?php
namespace Projet\App;
$debut = microtime(true) ;
define('WEBROOT',dirname(__FILE__)); //C:\wamp\www\Projet\public
define('ROOT',dirname(WEBROOT)); //C:\wamp\www\Projet
define('DS',DIRECTORY_SEPARATOR);//\
define('CORE',ROOT.DS.'core') ;                                 //C:\wamp\www\Projet\core
define('BASE_URL',dirname(dirname($_SERVER['SCRIPT_NAME'])));  ///Projet
define('HOME',str_replace(array("/","\\"),DS,WEBROOT));                           
/*Start session*/
session_start();

/*Run Application*/
require_once '../init.php';
$myApp = new Application();
$myApp->run();