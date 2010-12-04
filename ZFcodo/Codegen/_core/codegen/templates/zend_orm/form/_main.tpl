<template OverwriteFlag="false" DocrootFlag="false" DirectorySuffix="" TargetDirectory="<%= __FORM_DRAFTS__ %>" TargetFileName="<%= $objTable->FileName %>.php"/>
<?php
class Form_<%= $objTable->FileName %> extends Zend_Form 
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
        
        
        $this->addElement('submit', 'submit', array('ignore' => true));
    }
}
?>
