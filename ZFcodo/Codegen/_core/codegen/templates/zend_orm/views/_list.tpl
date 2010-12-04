<template OverwriteFlag="false" DocrootFlag="false" DirectorySuffix="" TargetDirectory="<%= __VIEWS__ . "/" . strtolower($objTable->FileName) %>" TargetFileName="list.phtml"/>
<h1>List <%= $objTable->ClassNamePlural %></h1>
<table>
    <thead>
        <tr>
        <% foreach ($objTable->ColumnArray as $objColumn) { %>
        <th><%= $objColumn->PropertyName %></th>
        <% } %>
        <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <? foreach($this-><%= $objTable->Name %>Array as $<%= $objTable->Name %>):?>
        <tr>
        <% foreach ($objTable->ColumnArray as $objColumn) { %>
        <td><?= $<%= $objTable->Name %>-><%= $objColumn->PropertyName %> ?></td>
        <% } %>
        <td>
            <a href="<?= $this->url(array('action'=>'edit', '<%= $objTable->Name %>-id'=>$<%= $objTable->Name %>-><% foreach ($objTable->ColumnArray as $objColumn) { %><% if ($objColumn->Identity){ %><%=$objColumn->PropertyName%><% } %><% }%>)) ?>">Edit</a>
            | <a href="<?= $this->url(array('action'=>'delete', '<%= $objTable->Name %>-id'=>$<%= $objTable->Name %>-><% foreach ($objTable->ColumnArray as $objColumn) { %><% if ($objColumn->Identity){ %><%=$objColumn->PropertyName%><% } %><% }%>)) ?>">Delete</a>
        </tr>
        <? endforeach; ?>
    </tbody>
</table>
<a href="<?= $this->url(array('action'=>'create')) ?>">Create New <%= ucfirst($objTable->Name) %></a>