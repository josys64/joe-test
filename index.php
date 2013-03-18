<?php
header('Content-Type: text/html; charset=utf-8');
// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../app'));

// Define application environment


//define('APPLICATION_ENV', getenv('APPLICATION_ENV') ); 

defined('APPLICATION_ENV')
   || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));



// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/../library')
)));

/** Zend_Application */	
require_once 'Zend/Application.php';	
// Create application, bootstrap, and run
$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/etc/config.ini'
);

$application->bootstrap()
            ->run();
