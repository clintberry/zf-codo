<?php

    // Define path to application directory
    defined('APPLICATION_PATH')
        || define('APPLICATION_PATH', realpath(dirname(dirname(__FILE__))));
    // Define application environment
    defined('APPLICATION_ENV')
        || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));
    
    // Ensure library/ is on include_path
    set_include_path(implode(PATH_SEPARATOR, array(
        realpath(dirname(APPLICATION_PATH) . '/library'),
        get_include_path()
    )));
    require('Zend/Application.php');
    $application = new Zend_Application(
        APPLICATION_ENV,
        APPLICATION_PATH . '/configs/application.ini'
    );
    
    require '../../library/Zcodo/Codegen/Manager.php';
    
    $qzfConfig = $application->getOption('zq');
    $manager = new Zcodo_Manager($qzfConfig);

    $manager->loadOrm();
    //run the codegen
    $manager->runCodegen();