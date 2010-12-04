
        $this->addElement('select', '<%= $objColumn->Reference->PropertyName %>', array('label' => '<%= QConvertNotation::WordsFromCamelCase($objColumn->Reference->PropertyName) %>'));
        $options = array();
    <% if (!$objColumn->NotNull) { %>
        $options['null'] = " - Select One - ";
    <% } %>
        $<%= $objColumn->Reference->VariableName %>Array = <%= $objColumn->Reference->VariableType %>::LoadAll();
        if ($<%= $objColumn->Reference->VariableName %>Array) foreach ($<%= $objColumn->Reference->VariableName %>Array as $<%= $objColumn->Reference->VariableName %>) {
            $options[$<%= $objColumn->Reference->VariableName %>-><%= $objCodeGen->GetTable($objColumn->Reference->Table)->PrimaryKeyColumnArray[0]->PropertyName %>] =  $<%= $objColumn->Reference->VariableName %>->__toString();
        } 
        $this->getElement('<%= $objColumn->Reference->PropertyName %>')
            ->addMultiOptions($options);