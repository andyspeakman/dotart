<?php

// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/application'));

// Define application environment
defined('APPLICATION_ENVIRONMENT')
    || define('APPLICATION_ENVIRONMENT', (getenv('APPLICATION_ENVIRONMENT') ? getenv('APPLICATION_ENVIRONMENT') : 'production'));

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(dirname(__FILE__) . '/library'),
    get_include_path()
)));

/** Zend_Application */
require_once 'Zend/Application.php';

// Create application, bootstrap, and run
$application = new Zend_Application(
    APPLICATION_ENVIRONMENT,
    APPLICATION_PATH . '/configs/config.xml'
);
$application->setAutoloaderNamespaces(array('Lightman_'))
            ->bootstrap()
            ->run();
