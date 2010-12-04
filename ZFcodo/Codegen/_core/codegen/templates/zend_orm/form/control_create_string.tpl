

        $this->addElement('text', '<%= $objColumn->PropertyName %>', array('label' => '<%= QConvertNotation::WordsFromCamelCase($objColumn->PropertyName) %>'));
        $this->getElement('<%= $objColumn->PropertyName %>')
<% if ($objColumn->NotNull) { %>
             ->setRequired(true)
<% } %>
             ->addFilter('StringTrim');