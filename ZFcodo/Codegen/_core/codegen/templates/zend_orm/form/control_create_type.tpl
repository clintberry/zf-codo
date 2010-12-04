
        $this->addElement('select', '<%= $objColumn->Reference->PropertyName %>', array('label' => '<%= QConvertNotation::WordsFromCamelCase($objColumn->Reference->PropertyName) %>'));
        $options = array();
    <% if (!$objColumn->NotNull) { %>
        $options['null'] = " - Select One - ";
    <% } %>
        foreach (<%= $objColumn->Reference->VariableType %>::$NameArray as $intId => $strValue) {
            $options[$intId] = $strValue;
        } 
        $this->getElement('<%= $objColumn->Reference->PropertyName %>')
            ->addMultiOptions($options);