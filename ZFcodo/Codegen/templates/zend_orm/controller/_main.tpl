<template OverwriteFlag="false" DocrootFlag="false" DirectorySuffix="" TargetDirectory="<%= __CONTROLLERS__ %>" TargetFileName="<%= $objTable->FileName %>Controller.php"/>
<?php
	require(__MODEL_GEN__ . '/<%= $objTable->FileName %>.php');

	/**
	 * The <%= $objTable->ClassName %> class defined here contains any
	 * customized code for the <%= $objTable->ClassName %> class in the
	 * Object Relational Model.  It represents the "<%= $objTable->Name %>" table 
	 * in the database, and extends from the code generated abstract <%= $objTable->ClassName %>Gen
	 * class, which contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 * 
	 * @package <%= QCodeGen::$ApplicationName; %>
	 * @subpackage DataObjects
	 * 
	 */
	
class <%= ucfirst($objTable->Name) %>Controller extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }
    
    public function listAction(){
    	
    }

    public function createAction(){
    	
    	
    }
    
    public function editAction(){

    }
    
    public function deleteAction(){
    	
    }
}
