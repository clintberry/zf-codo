<?php
           //require dirname(__FILE__) . "/configuration.inc.php";
            require(__QCUBED_CORE__ . '/framework/QBaseClass.class.php');
            require(__QCUBED_CORE__ . '/framework/QExceptions.class.php');
            require(__QCUBED_CORE__ . '/framework/QType.class.php');
            require(__QCUBED_CORE__ . '/framework/QApplicationBase.class.php');
            require(__QCUBED_CORE__ . '/framework/QDatabaseBase.class.php');
              
        function _p($strString, $blnHtmlEntities = true) {
            // Standard Print
            if ($blnHtmlEntities && (gettype($strString) != 'object'))
                print(QApplication::HtmlEntities($strString));
            else
                print($strString);
        }

        /**
         * Standard Print as Block function.  To aid with possible cross-scripting vulnerabilities,
         * this will automatically perform QApplication::HtmlEntities() unless otherwise specified.
         * 
         * Difference between _b() and _p() is that _b() will convert any linebreaks to <br/> tags.
         * This allows _b() to print any "block" of text that will have linebreaks in standard HTML.
         *
         * @param string $strString
         * @param boolean $blnHtmlEntities
         */
        function _b($strString, $blnHtmlEntities = true) {
            // Text Block Print
            if ($blnHtmlEntities && (gettype($strString) != 'object'))
                print(nl2br(QApplication::HtmlEntities($strString)));
            else
                print(nl2br($strString));
        }

        /**
         * Standard Print-Translated function.  Note: Because translation typically
         * occurs on coded text strings, NO HTML ESCAPING will be performed on the string.
         * 
         * Uses QApplication::Translate() to perform the translation (if applicable)
         *
         * @param string $strString string value to print via translation
         */
        function _t($strString) {
            // Print, via Translation (if applicable)
            print(QApplication::Translate($strString));
        }

        function _i($intNumber) {
            // Not Yet Implemented
            // Print Integer with Localized Formatting
        }

        function _f($intNumber) {
            // Not Yet Implemented
            // Print Float with Localized Formatting
        }

        function _c($strString) {
            // Not Yet Implemented
            // Print Currency with Localized Formatting
        }
        
abstract class QApplication extends QApplicationBase {
    /**
     * This is called by the PHP5 Autoloader.  This method overrides the
     * one in ApplicationBase.
     *
     * @return void
     */
    public static function Autoload($strClassName) {
        // First use the QCubed Autoloader
        if (!parent::Autoload($strClassName)) {
            // TODO: Run any custom autoloading functionality (if any) here...
        }
    }

    ////////////////////////////
    // QApplication Customizations (e.g. EncodingType, etc.)
    ////////////////////////////
    // public static $EncodingType = 'ISO-8859-1';

    ////////////////////////////
    // Additional Static Methods
    ////////////////////////////
    // TODO: Define any other custom global WebApplication functions (if any) here...
}
QApplication::Initialize();
        QApplication::InitializeDatabaseConnections();
        
             require(__QCUBED_CORE__ . '/framework/QQuery.class.php');
             require(__QCUBED_CORE__ . '/framework/QRssFeed.class.php');
             require(__QCUBED_CORE__ . '/framework/QEmailServer.class.php');
             require(__QCUBED_CORE__ . '/framework/QMimeType.class.php');
             require(__QCUBED_CORE__ . '/framework/QDateTime.class.php');
             require(__QCUBED_CORE__ . '/framework/QString.class.php');
             require(__QCUBED_CORE__ . '/framework/QStack.class.php');
             //require(__QCUBED_CORE__ . '/framework/QCryptography.class.php');
             //require(__QCUBED_CORE__ . '/framework/QSoapService.class.php');
             require(__QCUBED_CORE__ . '/framework/QI18n.class.php');
             require(__QCUBED__ . '/codegen/QQN.class.php');
             require(__QCUBED_CORE__ . '/framework/QQueryExpansion.class.php');
             require(__QCUBED__ . '/codegen/QConvertNotation.class.php');
             require(__QCUBED_CORE__ . '/framework/QFolder.class.php');
             require(__QCUBED_CORE__ . '/framework/QFile.class.php');
             require(__QCUBED_CORE__ . '/framework/QArchive.class.php');
             require(__QCUBED_CORE__ . '/framework/QLexer.class.php');
             require(__QCUBED_CORE__ . '/framework/QRegex.class.php');
             require(__QCUBED_CORE__ . '/framework/QTimer.class.php');
             
             
