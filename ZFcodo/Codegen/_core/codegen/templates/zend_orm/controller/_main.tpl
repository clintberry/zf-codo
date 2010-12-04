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
        $this->_forward('list');
    }
    
    public function listAction(){
    	$this->view-><%= $objTable->Name %>Array = <%= $objTable->ClassName %>::LoadAll();
    }

    public function createAction(){
    	$form = $this->view->form = new Form_<%= ucfirst($objTable->Name) %>;
    	if($this->_request->isPost())
        {
            if($form->isValid($this->_request->getPost()))
            {
                $<%= $objTable->Name %> = new <%= $objTable->ClassName %>;
                <% foreach ($objTable->ColumnArray as $objColumn) { %>
                    <% if (!$objColumn->Identity) { %>
                        $<%= $objTable->Name %>-><%= $objColumn->PropertyName %> = $form->getValue('<%= $objColumn->PropertyName %>');
                    <% } %>
		        <% } %>
		        $<%= $objTable->Name %>->save();
		        
		        $this->_helper->redirector('list');
            }
        }
    }
    
    public function editAction(){
    	$form = $this->view->form = new Form_<%= ucfirst($objTable->Name) %>;
    	if(null != $<%= $objTable->Name %>Id = $this->_request->getParam('<%= $objTable->Name %>-id',null)){
    		$<%= $objTable->Name %> = <%= $objTable->ClassName %>::Load($<%= $objTable->Name %>Id);
    		if($this->_request->isPost())
            {
	            if($form->isValid($this->_request->getPost()))
	            {
		            <% foreach ($objTable->ColumnArray as $objColumn) { %>
		            <% if (!$objColumn->Identity) { %>
		            $<%= $objTable->Name %>-><%= $objColumn->PropertyName %> = $form->getValue('<%= $objColumn->PropertyName %>');
		            <% } %>
		            <% } %>
		            $<%= $objTable->Name %>->save();
		            $this->_helper->redirector('list');
	            }
            }
            <% foreach ($objTable->ColumnArray as $objColumn) { %>
               <% if (!$objColumn->Identity) { %>
                    $form->setDefault('<%= $objColumn->PropertyName %>',$<%= $objTable->Name %>-><%= $objColumn->PropertyName %>);
                <% } %>
            <% } %>
    	}
    	else {
    		$this->_helper->redirector('list');
    	}
    }
    
    public function deleteAction(){
        if(null != $<%= $objTable->Name %>Id = $this->_request->getParam('<%= $objTable->Name %>-id',null)){
            $<%= $objTable->Name %> = <%= $objTable->ClassName %>::Load($<%= $objTable->Name %>Id);
            $<%= $objTable->Name %>->delete();
            $this->_helper->redirector('list');
        }
    }
}
