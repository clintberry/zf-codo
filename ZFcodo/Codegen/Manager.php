<?php

class ZFcodo_Manager {
    
    protected $docroot;
    protected $virtualDirectory;
    protected $subdirectory = '/library/ZFcodo/Codegen';
    /**
     * 
     * @var Zend_Application_Settings object
     */
    protected $config;
    
    protected $dbAdapter = "MySqli5";
    
    /**
     * Takes the application.ini settings for qcubed
     * @param array $qzfConfig
     */
    public function __construct($zqConfig)
    {
        $this->config = $zqConfig;
    }
    
    /**
     * Define the constants for Qcubed 
     * 
     */
    protected function defineConstants()
    {
        define('ALLOW_REMOTE_ADMIN', false);
        
        define ('__DOCROOT__', dirname(APPLICATION_PATH));
        define ('__VIRTUAL_DIRECTORY__', '');
        define ('__SUBDIRECTORY__', $this->subdirectory);   
        
        define ('__INCLUDES__', __DOCROOT__ . __SUBDIRECTORY__);
        define ('__CONFIGURATION__', __INCLUDES__);
        
        define ('__QCUBED__', __INCLUDES__);
            //define ('__PLUGINS__', __QCUBED__ . '/plugins');

        define ('__CACHE__', __INCLUDES__ . '/tmp/cache');

        // The QCubed Core
        define ('__QCUBED_CORE__', __INCLUDES__ . '/_core');

        // Destination for Code Generated class files
        define ('__MODEL__', APPLICATION_PATH . $this->config['modelFolder']);
        define ('__MODEL_GEN__', __MODEL__ . $this->config['modelBaseFolder']);
        define ('__META_CONTROLS__', __INCLUDES__ . '/../meta_controls' );
        define ('__META_CONTROLS_GEN__', __META_CONTROLS__ . '/Base' );
        define ('__CONTROLLERS__', APPLICATION_PATH . $this->config['controllerFolder']);
        define ('__VIEWS__', APPLICATION_PATH . $this->config['viewsBase']);
        
        define ('__FORM_DRAFTS__', APPLICATION_PATH . $this->config['formFolder']);
        define ('__PANEL_DRAFTS__', __SUBDIRECTORY__ . '/drafts/panels');
        define ('__FORMBASE_CLASSES__', __INCLUDES__ . '/../drafts/Base');
        

        // Location of QCubed-specific Web Assets (JavaScripts, CSS, Images, and PHP Pages/Popups)
        define ('__JS_ASSETS__', __SUBDIRECTORY__ . '/assets/_core/js');
        define ('__CSS_ASSETS__', __SUBDIRECTORY__ . '/assets/_core/css');
        define ('__IMAGE_ASSETS__', __SUBDIRECTORY__ . '/assets/_core/images');
        define ('__PHP_ASSETS__', __SUBDIRECTORY__ . '/assets/_core/php');
        define ('__PLUGIN_ASSETS__', __SUBDIRECTORY__ . '/assets/plugins');

        // jQuery folder location
        define ('__JQUERY_BASE__', '/jquery/jquery-1.4.min.js');
        define ('__JQUERY_EFFECTS__',   '/jquery/jquery-ui-1.7.2.custom.min.js');
        
        // Location of the QCubed-specific web-based development tools, like codegen.php
        define ('__DEVTOOLS__', __PHP_ASSETS__ . '/_devtools');

        // Location of the Examples site
        define ('__EXAMPLES__', __PHP_ASSETS__ . '/examples');
        
        define('DB_CONNECTION_1', serialize(array(
                'adapter' => $this->dbAdapter,
                'server' => $this->config['db']['host'],
                'port' => null,
                'database' => $this->config['db']['name'],
                'username' => $this->config['db']['username'],
                'password' => $this->config['db']['password'],
                'profiling' => false)));
        
        if ((function_exists('date_default_timezone_set')) && (!ini_get('date.timezone'))) 
                date_default_timezone_set('America/Los_Angeles');
                
        define('__FORM_STATE_HANDLER__', 'QFormStateHandler');          
        // If using the QFileFormStateHandler, specify the path where QCubed will save the session state files (has to be writeable!)
        define('__FILE_FORM_STATE_HANDLER_PATH__', __DOCROOT__ . '/tmp');


        // Define the Filepath for the error page (path MUST be relative from the DOCROOT)
        define('ERROR_PAGE_PATH', __PHP_ASSETS__ . '/error_page.php');

        // Define the Filepath for any logged errors
        define('ERROR_LOG_PATH', __INCLUDES__ . '/error_log');
    }
    
    public function loadOrm()
    {
        $this->defineConstants();
        require ("ZFcodo/Codegen/prepend.php");
    } 
    
    public function runCodegen()
    {
        require "ZFcodo/Codegen/codegen.php";
    }
}
