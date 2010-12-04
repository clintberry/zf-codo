
        $this->addElement('multiselect', '<%= $objManyToManyReference->ObjectDescriptionPlural %>', array('label' => '<%= QConvertNotation::WordsFromCamelCase($objManyToManyReference->ObjectDescriptionPlural) %>'));
        $options = array();
        $<%= $objManyToManyReference->VariableName %>Array = <%= $objManyToManyReference->VariableType %>::LoadAll();
        if ($<%= $objManyToManyReference->VariableName %>Array) foreach ($<%= $objManyToManyReference->VariableName %>Array as $<%= $objManyToManyReference->VariableName %>) {
            $options[$<%= $objManyToManyReference->VariableName %>-><%= $objCodeGen->GetTable($objManyToManyReference->AssociatedTable)->PrimaryKeyColumnArray[0]->PropertyName %>] =  $<%= $objManyToManyReference->VariableName %>->__toString();
        } 
        $this->getElement('<%= $objManyToManyReference->ObjectDescriptionPlural %>')
            ->addMultiOptions($options);