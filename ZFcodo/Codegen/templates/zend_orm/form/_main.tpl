<template OverwriteFlag="false" DocrootFlag="false" DirectorySuffix="" TargetDirectory="<%= __FORM_DRAFTS__ %>" TargetFileName="<%= $objTable->ClassName %>.php"/>
<?php
	class Form_<%= $objTable->ClassName %> extends Zend_Form {
    {
        /**
         * 
         * 
         * @author Justin Krueger <justin@converseo.com> 
         * @return mixed
         */
        public function init()
        {
            
            <%@ create_methods('objTable'); %>
            
        }
	}
?>
