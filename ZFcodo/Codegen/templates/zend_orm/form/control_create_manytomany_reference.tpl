
        $this->addElement('select', '<%= $objColumn->PropertyName %>', array('label' => '<%= QConvertNotation::WordsFromCamelCase($objColumn->PropertyName) %>'));
        $options = array();
    <% if (!$objColumn->NotNull) { %>
        $options['null'] = " - Select One - ";
    <% } %>
    
        if ($<%= $objManyToManyReference->VariableName %>Array) foreach ($<%= $objManyToManyReference->VariableName %>Array as $<%= $objManyToManyReference->VariableName %>) {
            $options[$<%= $objManyToManyReference->VariableName %>-><%= $objCodeGen->GetTable($objManyToManyReference->AssociatedTable)->PrimaryKeyColumnArray[0]->PropertyName %> =  $<%= $objManyToManyReference->VariableName %>->__toString();
            foreach ($objAssociatedArray as $objAssociated) {
                if ($objAssociated-><%= $objCodeGen->GetTable($objManyToManyReference->AssociatedTable)->PrimaryKeyColumnArray[0]->PropertyName %> == $<%= $objManyToManyReference->VariableName %>-><%= $objCodeGen->GetTable($objManyToManyReference->AssociatedTable)->PrimaryKeyColumnArray[0]->PropertyName %>)
                    $objListItem->Selected = true;
            }
            $this-><%=$strControlId %>->AddItem($objListItem);
        } 
        
        
        $this->getElement('<%= $objColumn->PropertyName %>')
            ->addMultiOptions($options);